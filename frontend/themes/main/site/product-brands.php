<?php

  use yii\helpers\html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Product-brands">
  <div class="container-fluid">
    <div class="row filter-product">
      <div class="col-sm-10 col-sm-offset-1">
        <form action="">
          <div class="row form-group">
            <div class="col-xs-6 col-md-3 item">
              <label>MARCA</label>
              <select class="form-control" name="">
                <option value="">2019</option>
                <option value="">2018</option>
              </select>
            </div>
            <div class="col-xs-6 col-md-3 item">
              <label>MODELO</label>
              <select class="form-control" name="">
                <option value="">2019</option>
                <option value="">2018</option>
              </select>
            </div>
            <div class="col-xs-6 col-md-3 item">
              <label>VERSIÓN</label>
              <select class="form-control" name="">
                <option value="">2019</option>
                <option value="">2018</option>
              </select>
            </div>
            <div class="col-xs-6 col-md-3 item">
              <label>AÑO</label>
              <select class="form-control" name="">
                <option value="">2019</option>
                <option value="">2018</option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 my-5"><span class="breadcrumbs"><a href="product.html">AUTOS NUEVOS </a>/ <a href="product-brands.html"><b>MARCA</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2 class="title-default">Marcas</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 content">
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-audi.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-bmw.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-chevrolet.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-honda.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-ford.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-hyundai.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-jeep.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-kia.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-mazda.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-mitsubishi.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-nissan.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-renault.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-seat.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-suzuki.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-toyota.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo-volkswagen.png', ['class' => 'img-responsive', 'alt' => 'Autojal']),
            ['site/product']); ?>
    </div>
  </div>
</div>
