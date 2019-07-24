<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class AccountForm extends Model
{
    public $name = 'Leo gonzalez';
    public $email = 'leo@lava.mx ';
    public $address = 'Unicornio 3866';
    public $state = 'Jalisco';
    public $city = 'Guadalajara';
    public $phone = '3322274617';
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email and body are required
            [['name', 'email', 'address', 'state', 'city', 'phone'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
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
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'address' => 'Domicilio',
            'state' => 'Estado',
            'city' => 'Ciudad',
            'phone' => 'Teléfono',
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
