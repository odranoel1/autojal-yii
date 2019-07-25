<?php

  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;

 ?>

<div class="Contact">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 mb-5">
        <h2 class="title-default">Contacto</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 col-md-offset-1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.827965520624!2d-103.35240598470193!3d20.676576886190183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1fb28277243%3A0x137a4d210b83da10!2sC.+Morelos+520%2C+Zona+Centro%2C+44100+Guadalajara%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1561390393337!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0; min-height:550px;" allowfullscreen></iframe></div>
      <div class="col-md-5">
        <h3>MORELOS 1520</h3><a href="#">Col. Americana, Guadalajara. Jal</a><a href="mailto:ramirez@autojal.mx">ramirez@autojal.mx</a><a href="tel:(33) 1605 6757">(33) 1605 6757</a>
        <h3>Solicitar información</h3>
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

          <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

          <?= $form->field($model, 'email') ?>

          <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>

          <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
              'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
          ]) ?>

          <div class="form-group">
              <?= Html::submitButton('Enviar', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
          </div>

        <?php ActiveForm::end(); ?>

        <?php if (Yii::$app->session->hasFlash('error')): ?>
          <div class="notify warning">
            <?= Yii::$app->session->getFlash('error'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
