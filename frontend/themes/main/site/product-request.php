<?php

  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

 ?>

<div class="Request-product">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 mt-5"><span class="breadcrumbs"><a href="product.html">AUTOS NUEVOS </a>/ <a href="product-brands.html">MARCA </a>/ <a href="product-detail.html">JEEP </a>/ <a href="product-detail.html">GRAND CHEROKEE </a>	/ <a href="request-product.html"><b>APARTAR</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h2 class="title-default">Solicitar unidad</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="process-badge">
          <div class="item active">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 241.01 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon class="polygon" id="_Path_" data-name="&lt;Path&gt;" points="215.01 78.07 0 78.07 0 0 215.01 0 241.01 37 215.01 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-1.png', ['alt' => 'Autojal']); ?>
              <span>Captura Datos</span>
            </div>
          </div>
          <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.09 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon class="polygon" id="_Path_" data-name="&lt;Path&gt;" points="214.09 78.07 0 78.07 26.01 37 0 0 214.09 0 240.09 37 214.09 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-2.png', ['alt' => 'Autojal']); ?>
              <span>Enviar solicitud</span>
            </div>
          </div>
          <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.09 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon class="polygon" id="_Path_" data-name="&lt;Path&gt;" points="214.09 78.07 0 78.07 26.01 37 0 0 214.09 0 240.09 37 214.09 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-3.png', ['alt' => 'Autojal']); ?>
              <span>Confirmación existencia</span>
            </div>
          </div>
          <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.09 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon class="polygon" id="_Path_" data-name="&lt;Path&gt;" points="214.09 78.07 0 78.07 26.01 37 0 0 214.09 0 240.09 37 214.09 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-4.png', ['alt' => 'Autojal']); ?>
              <span>Completar datos</span>
            </div>
          </div>
          <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.09 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon class="polygon" id="_Path_" data-name="&lt;Path&gt;" points="214.09 78.07 0 78.07 26.01 37 0 0 214.09 0 240.09 37 214.09 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-5.png', ['alt' => 'Autojal']); ?>
              <span>Realizar pago</span>
            </div>
          </div>
          <div class="item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.09 78.07">
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <polygon id="_Path_" data-name="&lt;Path&gt;" points="214.09 78.07 0 78.07 26.01 37 0 0 214.09 0 214.09 78.07" style="fill: #7e7e7d"/>
                </g>
              </g>
            </svg>
            <div class="content">
              <?= Html::img($assets->baseUrl . '/img/autojal-icono-6.png', ['alt' => 'Autojal']); ?>
              <span>Programar entrega</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'form-request-prod']]); ?>
          <div class="row">
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>EJECUTIVO</h3>
                <hr>
              </div>
              <?= $form->field($model, 'executive_number')->textInput(['autofocus' => true]) ?>
              <?= $form->field($model, 'executive_name') ?>
              <?= $form->field($model, 'executive_email') ?>
              <?= $form->field($model, 'executive_phone') ?>
              <?= $form->field($model, 'executive_cel') ?>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>CLIENTE</h3>
                <hr>
              </div>
              <?= $form->field($model, 'customer_name') ?>
              <?= $form->field($model, 'customer_folio') ?>
              <?= $form->field($model, 'customer_email') ?>
              <?= $form->field($model, 'customer_phone') ?>
              <?= $form->field($model, 'customer_comments')->textarea(['rows' => 1]) ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="title">
                <h3>AGENCIAS</h3>
                <hr>
              </div>
              <?= $form->field($model,'agency')->radioList($model->agency_options, ['item' => function ($index, $label, $name, $checked, $value) {
                return '<div class="radio">' .
                       '<label class="select-radio">' .
                       Html::radio($name, $checked, ['value' => $value]) .
                       " {$label}" .
                       '</label>' .
                      '</div>';
              }])->label(false); ?>

              <?= $form->field($model,'agency_item',['options' => ['class' => 'select select-agency d-none']])->radioList($model->agency_item_options, ['item' => function ($index, $label, $name, $checked, $value) {
                return
                       '<div class="checkbox">' .
                       '<label class="">' .
                       Html::checkbox($name, $checked, ['value' => $value]) .
                       '<span class="effect">' . "{$label}" . '</span>' .
                       '</label>' .
                      '</div>';
              }])->label(false); ?>

              <?= $form->field($model,'state',['options' => ['class' => 'select select-zone d-none']])->radioList($model->state_options, ['item' => function ($index, $label, $name, $checked, $value) {
                return
                       '<div class="checkbox">' .
                       '<label class="">' .
                       Html::checkbox($name, $checked, ['value' => $value]) .
                       '<span class="effect">' . "{$label}" . '</span>' .
                       '</label>' .
                      '</div>';
              }])->label(false); ?>

              <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [ 'template' =>
                  '<div class="row">
                    <div class="col-sm-3">{image}</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">{input}</div>
                  </div>']) ?>

              <?= Html::submitButton('ENVIAR', ['class' => 'btn btn-default my-5', 'name' => 'contact-button']); ?>
            </div>
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
