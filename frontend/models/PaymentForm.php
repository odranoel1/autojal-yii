<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PaymentForm extends Model
{
    const PAY_1 = 'Pago con paypal';
    const PAY_2 = 'Pago con Oxxo pay';
    const PAY_3 = 'Pago con Tarjeta';

    public $name;
    public $card_number;
    public $code_security;
    public $deadline;
    public $payments = self::PAY_1;
    public $payments_options = [
      self::PAY_1 => 'Pago con paypal',
      self::PAY_2 => 'Pago con Oxxo pay',
      self::PAY_3 => 'Pago con Tarjeta'
    ];


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, card_number, code_security, deadline are required
            [['name', 'card_number', 'code_security', 'deadline'], 'required']
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
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    // public function sendEmail($email)
    // {
    //     return Yii::$app->mailer->compose()
    //         ->setTo($email)
    //         ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //         ->setReplyTo([$this->email => $this->name])
    //         ->setSubject($this->subject)
    //         ->setSubject('Contacto en página web')
    //         ->setTextBody($this->body)
    //         ->send();
    // }
}
