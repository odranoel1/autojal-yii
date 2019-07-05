<?php

  use yii\helpers\html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Account container">
  <div class="row my-5">
    <div class="col-sm-3 col-lg-2 col-lg-offset-1 text-center">
      <?= Html::img($assets->baseUrl . '/img/autojal-perfil.png', ['class' => 'img-responsive profile', 'alt' => 'Autojal']); ?>
    </div>
    <div class="col-sm-9 col-lg-8">
      <form action="">
        <div class="row form-group">
          <div class="col-sm-6">
            <input class="form-control" type="text" value="Diego Valdéz Diaz">
          </div>
          <div class="col-sm-6">
            <input class="form-control" type="text" value="dirgovdiaz@gmail.com">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-12">
            <input class="form-control" type="text" value="Jose María Heredia #2453 Col. Lomas de Guevara CP.48734">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4">
            <input class="form-control" type="text" value="Guadalajara">
          </div>
          <div class="col-sm-4">
            <input class="form-control" type="text" value="Jalisco">
          </div>
          <div class="col-sm-4">
            <input class="form-control" type="text" value="(33) 1234 5667">
          </div>
        </div>
        <input class="btn btn-default" type="submit" value="CAMBIAR CONTRASEÑA">
        <input class="btn btn-default" type="submit" value="CERRAR SESIÓN">
      </form>
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
