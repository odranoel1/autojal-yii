<?php

  use yii\helpers\html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Product-payment">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 my-5"><span class="breadcrumbs"><a href="product.html">AUTOS NUEVOS </a>/ <a href="product-brands.html">MARCA </a>/ <a href="product-detail.html">JEEP </a>/ <a href="product-detail.html">GRAND CHEROKEE </a>	/ <a href="request-product.html"><b>APARTAR</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title-default">Pago</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="description">
          <h3>Jeep Cherokee Trailhawk</h3>
          <p><b>Ladero 4x4 - 3.2L 271 hp v6</b>Transmisión automática
            Cuatro puertas
            8 cilindros
            Motor 6.2
          </p>
          <div class="right"><b>2019</b><a class="color" href="#"></a></div>
        </div>
        <div class="price"><b>$824,900</b></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <!-- <form action="">
          <div class="row form-group">
            <div class="col-sm-12">
              <div class="pay">
                <label class="radio-inline" for="">
                  <input type="radio" name="optradio" checked>Pago con paypal
                </label>
                <?= Html::img($assets->baseUrl . '/img/autojal-logo-paypal.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
              </div>
              <div class="pay">
                <label class="radio-inline" for="">
                  <input type="radio" name="optradio">Pago con Oxxo pay
                </label>
                <?= Html::img($assets->baseUrl . '/img/autojal-logo-oxxopay.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
              </div>
              <div class="pay">
                <label class="radio-inline" for="">
                  <input type="radio" name="optradio">Pago con Tarjeta
                </label>
                <?= Html::img($assets->baseUrl . '/img/autojal-logo-visa.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
              </div>
            </div>
          </div>
        </form> -->
        <?php $form = ActiveForm::begin(['id' => 'product-payment-form', 'options' => ['class' => 'form-request-prod']]); ?>
          <?= $form->field($model,'payments')->radioList($model->payments_options, ['item' => function ($index, $label, $name, $checked, $value) {
            return '<div class="pay">' .
                   '<label class="radio-inline">' .
                   Html::radio($name, $checked, ['value' => $value]) .
                   " {$label}" .
                   '</label>' .
                  '</div>';
          }])->label(false); ?>
          <div class="row">
            <div class="col-sm-6">
              <?= $form->field($model, 'name')->textInput() ?>
            </div>
            <div class="col-sm-6">
              <?= $form->field($model, 'card_number')->textInput() ?>
            </div>
            <div class="col-sm-6">
              <?= $form->field($model, 'code_security')->textInput() ?>
            </div>
            <div class="col-sm-6">
              <?= $form->field($model, 'deadline')->textInput() ?>
            </div>
          </div>
          <?= Html::submitButton('FINALIZAR', ['class' => 'btn btn-default pull-right my-5']) ?>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>
