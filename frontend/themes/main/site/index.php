<?php

  use yii\helpers\Html;
  use yii\widgets\Menu;

  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<header class="Header Header-home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <?= Menu::widget([
              'encodeLabels' => false,
              'options' => ['class' => 'list-inline'],
              'items' => [
                ['label' => Html::img($assets->baseUrl . '/img/autojal-logo-blanco.png', ['alt' => 'Autojal']), 'url' => ['/site/index']],
                ['label' => 'NOSOTROS', 'url' => ['/site/about']],
                ['label' => 'AUTOS NUEVOS', 'url' => ['/site/product']],
                ['label' => 'AUTOS SEMINUEVOS', 'url' => ['/site/product']],
                ['label' => 'AUTOS DEMO', 'url' => ['/site/product']],
                ['label' => 'NOTICIAS', 'url' => ['/site/blog']],
                ['label' => 'CONTACTO', 'url' => ['/site/contact']],
                ['label' => '<i class="fas fa-search"></i>', 'url' => ['/site/index']],
                ['label' => Html::img($assets->baseUrl . '/img/autojal-llave-icono.png', ['alt' => 'Autojal']), 'url' => ['/site/account']],
              ]
            ]); ?>
      </div>
    </div>
  </div>
</header>
<div class="slider-pro" id="home-sidebar">
  <div class="sp-slides">
    <div class="sp-slide">
      <?= Html::img($assets->baseUrl . '/img/autojal-banner-home.png',[
          'class' => 'sp-image',
          'data-default' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'data-retina' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;',
          'alt' => 'Autojal']); ?>
      <div class="sp-layer">
        <h2>AUTOS NUEVOS Y SEMINUEVOS MULTIMARCA</h2>
        <?= Html::a('VER NUEVOS MODELOS', ['site/product'], ['class' => 'btn btn-default']); ?>
      </div>
    </div>
    <div class="sp-slide">
      <?= Html::img($assets->baseUrl . '/img/autojal-banner-home.png',[
          'class' => 'sp-image',
          'data-default' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'data-retina' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;',
          'alt' => 'Autojal']); ?>
      <div class="sp-layer">
        <h2>AUTOS NUEVOS Y SEMINUEVOS MULTIMARCA</h2>
        <?= Html::a('VER NUEVOS MODELOS', ['site/product'], ['class' => 'btn btn-default']); ?>
      </div>
    </div>
    <div class="sp-slide">
      <?= Html::img($assets->baseUrl . '/img/autojal-banner-home.png',[
          'class' => 'sp-image',
          'data-default' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'data-retina' => $assets->baseUrl . '/img/autojal-banner-home.png',
          'style' => 'width: 100%; height: auto; margin-left: 0px; margin-top: -70px;',
          'alt' => 'Autojal']); ?>
      <div class="sp-layer">
        <h2>AUTOS NUEVOS Y SEMINUEVOS MULTIMARCA</h2>
        <?= Html::a('VER NUEVOS MODELOS', ['site/product'], ['class' => 'btn btn-default']); ?>
      </div>
    </div>
  </div>
</div>
<div class="Home">
  <div class="container-fluid">
    <div class="row car-segment">
      <div class="col-sm-12">
        <h2>AUTOS POR SEGMENTO</h2>
        <ul class="list-inline hidden-sm hidden-xs">
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-deportivo.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'DEPORTIVO',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-coupe.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'COUPÉ',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-pickup.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'PICKUP',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-coupe.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'HÍBRIDOS',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-electricos.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'ELÉCTRICOS',
                ['site/product']); ?>
          </li>
        </ul>
        <ul class="list-inline hidden-sm hidden-xs">
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-electricos.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'SEDÁN',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-minivan.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'MINIVAN',
                ['site/product']); ?>
            </a>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-suv.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'SUV',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-hatchback.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'HATCHBACK',
                ['site/product']); ?>
          </li>
        </ul>
        <ul class="mobil-cars">
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-deportivo.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'DEPORTIVO',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-coupe.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'COUPÉ',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-pickup.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'PICKUP',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-coupe.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'HÍBRIDOS',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-electricos.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'ELÉCTRICOS',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-electricos.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'SEDÁN',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-minivan.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'MINIVAN',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-suv.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'SUV',
                ['site/product']); ?>
          </li>
          <li>
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-hatchback.png', ['class' => 'img-responsive', 'alt' => 'Autojal']) . 'HATCHBACK',
                ['site/product']); ?>
          </li>
        </ul>
      </div>
    </div>
    <div class="row featured shadow">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>SEMINUEVOS DESTACADOS</h2>
        <div class="owl-carousel owl-theme" id="cars-featured">
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row cta-parallax">
      <div class="col-sm-12">
        <h2>TU COMUNIDAD AUTOMOTRIZ ONLINE</h2>
      </div>
    </div>
    <div class="row featured">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>OPORTUNIDAD DE AUTOS DEMO</h2>
        <div class="owl-carousel owl-theme" id="cars-demo">
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
          <div class="item">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-carro-demo.jpg', ['class' => 'img-responsive', 'alt' => 'Autojal']),
                ['site/product-detail']); ?>
            <div class="content">
              <p>Volkswagen</p><span>Gol Sedan 2018</span><b>$218,480 MXP</b>
              <?= Html::a('VER DETALLE', ['site/product-detail'], ['class' => 'btn btn-block btn-default']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row services py-5">
      <div class="col-sm-6 col-md-4 col-md-offset-2">
        <h2>SERVICIOS</h2>
        <ul>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-creditcard-icono.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
            <div class="content"><b>Tramita tu crédito</b>
              <p>Dinos tus necesidades y tenemos el plan a tu medida.</p><a class="btn btn-default" href="#">SOLICITA TU CRÉDITO</a>
            </div>
          </li>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-arrendamiento-icono.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
            <div class="content"><b>Tramita tu arrendamiento</b>
              <p>Aprovecha un arrendamiento para deducir tu unidad, planes a tu medida.</p><a class="btn btn-default fix" href="#">SOLICITA UN ARRENDAMIENTO</a>
            </div>
          </li>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-seguros-icono.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
            <div class="content"><b>Seguros y Flotilla</b>
              <p>Contamos con precios especiales para flotillas. Pregunta por marcas participantes.</p><a class="btn btn-default" href="#">SOLICITAR FLOTILLA</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-sm-6">
        <?= Html::img($assets->baseUrl . '/img/autojal-servicios.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
      </div>
    </div>
  </div>
</div>
