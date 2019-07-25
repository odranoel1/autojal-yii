<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SetAsideForm is the model behind the contact form.
 */
class SetAsideForm extends Model
{
    public $color = 'Brown';
    public $color_options = [
      'Brown' => '',
      'Gray' => ''
    ];
    public $version;
    public $version_options = [
      'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v6' => 'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v6',
      'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v5' => 'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v5',
      'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v4' => 'Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v4',
    ];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'color' => 'COLORES',
            'version' => 'Seleccionar versión'
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
    //         // ->setSubject($this->subject)
    //         ->setSubject('Contacto en página web')
    //         ->setTextBody($this->body)
    //         ->send();
    // }
}
