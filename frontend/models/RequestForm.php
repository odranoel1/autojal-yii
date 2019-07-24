<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * RequestForm is the model behind the contact form.
 */
class RequestForm extends Model
{
    const IN_ZONE = 'AGENCIAS DE LA MARCA EN MI ZONA';
    const SELECT_ZONE = 'SELECCIÓN POR AGENCIA';
    const FOR_ZONE = 'SELECCIÓN POR ZONA';

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
    public $honda;
    public $honda_options = [
      'Honda Colomos' => 'Honda Colomos',
      'Honda Magno' => 'Honda Magno',
      'Honda Excelencia' => 'Honda Excelencia',
      'Honda Giz Gallo' => 'Honda Giz Gallo',
      'Honda Acueducto' => 'Honda Acueducto',
      'Honda Vanguardia' => 'Honda Vanguardia',
    ];
    public $states;
    public $states_options = [
      'Jalisco' => 'Jalisco',
      'Michoacán' => 'Michoacán',
      'Nayarit' => 'Nayarit',
      'Guanajuato' => 'Guanajuato',
      'Aguascalientes' => 'Aguascalientes',
      'Colima' => 'Colima',
      'Sinaloa' => 'Sinaloa',
    ];
    public $verifyCode;
    public $name;


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
              'agency_in_zone', 'agency_for_zone'], 'required'],
            // email has to be a valid email address
            [['executive_email', 'customer_email'], 'email'],
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
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            // ->setSubject($this->subject)
            ->setSubject('Contacto en página web')
            ->setTextBody($this->body)
            ->send();
    }
}
