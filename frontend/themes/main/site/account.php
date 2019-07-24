<?php

  use yii\helpers\html;
  use yii\bootstrap\ActiveForm;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Account container">
  <div class="row my-5">
    <div class="col-sm-3 col-lg-2 col-lg-offset-1 text-center">
      <?= Html::img($assets->baseUrl . '/img/autojal-perfil.png', ['class' => 'img-responsive profile', 'alt' => 'Autojal']); ?>
    </div>
    <div class="col-sm-9 col-lg-8">
      <?php $form = ActiveForm::begin(['id' => 'account-form']); ?>
        <div class="row">
          <div class="col-sm-6">
            <?= $form->field($model, 'name')->textInput()->label(false) ?>
          </div>
          <div class="col-sm-6">
            <?= $form->field($model, 'email')->textInput()->label(false) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <?= $form->field($model, 'address')->textInput()->label(false) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <?= $form->field($model, 'city')->textInput()->label(false) ?>
          </div>
          <div class="col-sm-4">
            <?= $form->field($model, 'state')->textInput()->label(false) ?>
          </div>
          <div class="col-sm-4">
            <?= $form->field($model, 'phone')->textInput()->label(false) ?>
          </div>
        </div>
        <?= Html::submitButton('CAMBIAR CONTRASEÑA', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
        <?= Html::submitButton('CERRAR SESIÓN', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="title">
        <h2>OPORTUNIDAD DE AUTOS DEMO</h2>
        <hr>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 oportunities my-5">
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="title">
        <h2>OPORTUNIDAD DE AUTOS DEMO</h2>
        <hr>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 oportunities my-5">
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
      <div class="item">
        <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <div class="content"><b>Jeep Cherokee Trailhawk</b>
          <p>Cliente: Juan López</p>
          <p>12/03/2019</p>
          <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-default btn-block']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
