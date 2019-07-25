<?php

  use yii\helpers\html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Product">
  <?=  $this->render('//site/_search', ['search_model' => $search_model]); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 my-5"><span class="breadcrumbs"><a href="product.html">AUTOS NUEVOS </a>/ <a href="product-brands.html">MARCA </a>/ <a href="product.html"><b>JEEP</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title-default">Modelos<span>Jeep</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 grid">
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['alt' => 'Autojal']),
              ['site/product-detail']); ?>
          <div class="content">
            <b>Grand Cherokee</b>
            <b>SEMINUEVO</b>
            <span>PRECIO: $360,900</span>
            <span>HONDA, CIVIC, TOURING, 2020</span>
            <span>TRANSMISIÓN CVT</span>
            <span>KMS 42,500</span>
            <span>COLORES</span>
            <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
            <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 text-center my-5"><a class="btn btn-link" href="#">VER MÁS</a></div>
    </div>
  </div>
</div>
