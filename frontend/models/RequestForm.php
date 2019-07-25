<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\JsExpression;

/**
 * RequestForm is the model behind the contact form.
 */
class RequestForm extends Model
{
    const IN_ZONE = 'AGENCIAS DE LA MARCA EN MI ZONA';
    const SELECT_ZONE = 'SELECCIÓN POR AGENCIA';
    const FOR_ZONE = 'SELECCIÓN POR ZONA';
    const AGC_COLOMOS = 'Honda Colomos';
    const AGC_MAGNO = 'Honda Magno';
    const AGC_EXCELENCIA = 'Honda Excelencia';
    const AGC_GLZ = 'Honda Giz Gallo';
    const AGC_ACUEDUCTO = 'Honda Acueducto';
    const AGC_VANGUARDIA = 'Honda Vanguardia';

    public $executive_number;
    public $executive_name;
    public $executive_email;
    public $executive_phone;
    public $executive_cel;
    public $customer_name;
    public $customer_folio;
    public $customer_email;
    public $customer_phone;
    public $customer_comments;
    public $agency = self::IN_ZONE;
    public $agency_options = [
      self::IN_ZONE => 'AGENCIAS DE LA MARCA EN MI ZONA',
      self::SELECT_ZONE => 'SELECCIÓN POR AGENCIA',
      self::FOR_ZONE => 'SELECCIÓN POR ZONA',
    ];
    public $agency_item;
    public $agency_item_options = [
      self::AGC_COLOMOS => 'Honda Colomos',
      self::AGC_MAGNO => 'Honda Magno',
      self::AGC_EXCELENCIA => 'Honda Excelencia',
      self::AGC_GLZ => 'Honda Giz Gallo',
      self::AGC_ACUEDUCTO => 'Honda Acueducto',
      self::AGC_VANGUARDIA => 'Honda Vanguardia',
    ];
    public $state;
    public $state_options = [
      'Jalisco' => 'Jalisco',
      'Michoacán' => 'Michoacán',
      'Nayarit' => 'Nayarit',
      'Guanajuato' => 'Guanajuato',
      'Aguascalientes' => 'Aguascalientes',
      'Colima' => 'Colima',
      'Sinaloa' => 'Sinaloa',
    ];
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // required fields
            [[
              'executive_number', 'executive_name', 'executive_email', 'executive_phone', 'executive_cel',
              'customer_name', 'customer_folio', 'customer_email', 'customer_phone', 'customer_comments',
              'agency'], 'required'],
            // email has to be a valid email address
            [['executive_email', 'customer_email'], 'email'],
            [['agency_item'], 'required','when' => function($model) {
                return $model->agency == RequestForm::SELECT_ZONE;
              }, 'whenClient' => new JsExpression("function (attribute, value){
                return $('.isActive input').val() === '". RequestForm::SELECT_ZONE ."';
              }")],
            [['state'], 'required','when' => function($model) {
              return $model->agency == RequestForm::FOR_ZONE;
            }, 'whenClient' => new JsExpression("function (attribute, value) {
                return $('.isActive input').val() === '". RequestForm::FOR_ZONE ."';
              }")],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'executive_number' => 'No. Usuario de Ejecutivo',
            'executive_name' => 'Nombre',
            'executive_email' => 'Mail',
            'executive_phone' => 'Teléfono fijo',
            'executive_cel' => 'Celular',
            'customer_name' => 'Nombre',
            'customer_folio' => 'Folio de autorización de crédito',
            'customer_email' => 'Correo electrónico',
            'customer_phone' => 'Teléfono',
            'customer_comments' => 'Comentarios',
            'verifyCode' => 'Captcha',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        $body =
          sprintf(
            "No. Usuario de Ejecutivo:%s\n Nombre de Ejecutivo:%s\n Correo del Ejecutivo:%s\n Telefono del ejecutivo:%d\n Celular del Ejecutivo:%d\n
            Nombre del cliente:%s\n Folio de autorización:%s\n Correo del cliente:%s\n Telefono del cliente:%s\n Comentarios:%s\n
            Agencia:%s\n Agencia(Lugar):%s\n Estado:%s\n",
            $this->executive_number, $this->executive_name, $this->executive_email, $this->executive_number, $this->executive_cel,
            $this->customer_name, $this->customer_folio, $this->customer_email, $this->customer_phone, $this->customer_comments,
            $this->agency, $this->agency_item, $this->state);
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Solicitud para apartar unidad en página web')
            ->setTextBody($body)
            ->send();
    }
}
