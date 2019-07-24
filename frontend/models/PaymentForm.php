<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PaymentForm extends Model
{
    public $name;
    public $card_number;
    public $code_security;
    public $deadline;
    public $payments;
    public $payments_options = [
      'Pago con paypal' => 'Pago con paypal',
      'Pago con Oxxo pay' => 'Pago con Oxxo pay',
      'Pago con Tarjeta' => 'Pago con Tarjeta'
    ];
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email and body are required
            [['name', 'card_number', 'code_security', 'deadline'], 'required'],
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
            'name' => 'Nombre del Titular',
            'card_number' => 'Número de tarjeta',
            'code_security' => 'Código de seguridad',
            'deadline' => 'Fecha de vencimiento',
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
