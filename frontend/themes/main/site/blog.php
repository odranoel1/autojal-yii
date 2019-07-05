<?php

  use yii\helpers\html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Blog">
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
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title-default">
          <a class="back" href="/"><i class="fas fa-chevron-left mr-4"></i>Blog</a>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 posts grid">
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
        <div class="item">
          <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
              ['site/blog-detail']); ?>
          <div class="content"><b>
              En 2024, 57% de los
              autos será eléctrico</b>
              <?= Html::a('VER DETALLE', ['site/blog-detail'], ['class' => 'btn btn-block btn-default']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
