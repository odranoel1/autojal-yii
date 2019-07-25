<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SearchForm is the model behind the contact form.
 */
class SearchForm extends Model
{
    public $brand;
    public $brand_options = [
      '2019',
      '2018',
      '2017'
    ];
    public $year;
    public $year_options = [
      '2019',
      '2018',
      '2017'
    ];
    public $modelo;
    public $modelo_options = [
      '2019',
      '2018',
      '2017'
    ];
    public $version;
    public $version_options = [
      '2019',
      '2018',
      '2017'
    ];


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email and body are required
            [['name', 'email', 'body'], 'required'],
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
            'brand' => 'MARCA',
            'year' => 'AÑO',
            'modelo' => 'MODELO',
            'version' => 'VERSIÓN',
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
