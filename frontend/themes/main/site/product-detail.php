<?php

  use yii\helpers\html;
  use yii\bootstrap\Collapse;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Product-detail">
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
      <div class="col-md-10 col-md-offset-1 my-5"><span class="breadcrumbs"><a href="product.html">MARCA </a>/ <a href="product-brands.html"><b>JEEP</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2 class="title-default">Grand Cherokee trailhawk<span>Jeep</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-5 col-md-offset-1">
        <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-responsive main-img', 'alt' => 'Autojal', 'id' => 'img-detail']),
            $assets->baseUrl . '/img/autojal-producto-general.png', ['class' => 'img-zoom']); ?>
        <ul class="list-inline thumbnails">
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png',[
              'class' => 'img-responsive img-detail-link',
              'data-detail' => '#img-detail',
              'data-src' => $assets->baseUrl . '/img/autojal-producto-general.png',
              'alt' => 'Autojal']); ?>
          </li>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png',[
              'class' => 'img-responsive img-detail-link',
              'data-detail' => '#img-detail',
              'data-src' => $assets->baseUrl . '/img/autojal-producto-general.png',
              'alt' => 'Autojal']); ?>
          </li>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png',[
              'class' => 'img-responsive img-detail-link',
              'data-detail' => '#img-detail',
              'data-src' => $assets->baseUrl . '/img/autojal-producto-general.png',
              'alt' => 'Autojal']); ?>
          </li>
          <li>
            <?= Html::img($assets->baseUrl . '/img/autojal-producto-general.png',[
              'class' => 'img-responsive img-detail-link',
              'data-detail' => '#img-detail',
              'data-src' => $assets->baseUrl . '/img/autojal-producto-general.png',
              'alt' => 'Autojal']); ?>
          </li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-5 description">
        <b>Grand Cherokee - </b>
        <b>SEMINUEVO</b>
        <span>PRECIO: $360,900</span>
        <span>HONDA, CIVIC, TOURING, 2020</span>
        <span>TRANSMISIÓN CVT</span>
        <span>KMS 42,500</span>
        <span>COLORES</span>
        <!-- <h3>Descripción</h3>
        <p>
          Mientras que su homólogo de la década de los ochenta y noventa era una robusta SUV,
          se presenta mucho más exclusiva y sofisticada, muy a tono con los tiempos que transcurren.
          La Cherokee recurre a un propulsor de seis cilindros de 3.2 litros que se acopla a una
          caja automática de nueve velocidades, para hacerle frente a modelos de la talla de
          Ford Edge, Hyundai Santa Fe y Nissan Murano.
        </p> -->
        <form class="select-version" action="">
          <!-- <label>AÑO</label>
          <select name="">
            <option value="">2019</option>
            <option value="">2018</option>
          </select> -->
          <div class="color"><a href="#" target=""><span></span></a><a class="gray" href="#" target=""><span></span></a></div>
          <p><b>Seleccionar versión</b></p><a href="#">Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v6</a><a href="#">Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v6</a><a href="#">Jeep Grand Cherokee Ladero 4x4 - 3.2L 271 hp v6</a>
          <!-- <label>Color</label> -->
          <!-- <p class="price"><b>$824,900.00</b></p> -->
          <div class="row">
            <div class="col-md-6 my-3">
              <button class="btn btn-default btn-block" type="submit">APARTAR<a class="pull-right question" href="#"><i class="fas fa-question mx-2"></i>
                  <p>
                    -Tu apartado será de $2,000.00 MNX
                    (Esta cantidad se descuenta del valor de tu auto) <br><br>
                    -La plataforma Autojal se encarga de ubicar tu auto nuevo en la zona metropolitana.<br><br>
                    -Despues de ubicar tu unidad, podrás imprimir la logística para la facturación y entrega de tu unidad.<br><br>
                    -Devolución sin costo del apartado. En caso de no haber existencia de tu unidad, te daremos alternativas. Si no te interesa ninguna, te podemos hacer la devolución de tu apartado al 100%.
                  </p></a></button>
            </div>
            <div class="col-md-6 mt-3">
              <?= Html::a('SOLICITAR INFORMACIÓN',['site/product-request'], ['class' => 'btn btn-default']); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="advice">
                Al dar click aquí, esta autorizando que autojal.mx y sus socios comerciales, te contacten por teléfono o mensajes de texto.
                De igual manera, significa que estás de acuerdo con nuestro aviso de privacidad. Valoramos tu privacidad, consulta nuestro
                aviso en www.autojal.mx/avisodeprivacidad
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <?= Html::a('SOLICITAR TU CRÉDITO',['site/product-request'], ['class' => 'btn btn-default']); ?>
            </div>
            <div class="col-md-6">
              <?= Html::a('SOLICITAR UN ARRENDAMIENTO',['site/product-request'], ['class' => 'btn btn-default fix-height']); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <?= Collapse::widget([
                'items' => [
                  [
                    'label' => 'Mostrar más detalles',
                    'content' => ' Mostrar todas las características posibles y disponibles de nuestra base de datos que correspondan a este auto.',
                    'options' => ['class' => 'mt-3'],
                    'contentOptions' => ['class' => 'in']
                  ]
                ]
              ]); ?>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 specifications my-5">
        <h2>Especificaciones</h2>
        <ul>
          <li><b>Vehículo</b></li>
          <li><b>Precio</b></li>
          <li><b>Kilometraje</b></li>
          <li><b>Transmisión</b></li>
          <li><b>Puertas</b></li>
          <li><b>Pasajeros</b></li>
          <li><b>Litros (motor)</b></li>
          <li><b>Cilindros</b></li>
          <li><b>Combustible</b></li>
          <li><b>Consumo de combustible</b></li>
          <li><b>2019 Dodge Charger SRT SC</b></li>
          <li><b>$1,314,900 MXP</b></li>
          <li><b>N/D</b></li>
          <li><b>Automático</b></li>
          <li><b>4</b></li>
          <li><b>5</b></li>
          <li><b>6.2</b></li>
          <li><b>8</b></li>
          <li><b>Gasolina premium</b></li>
          <li><b>8.3 km/l</b></li>
        </ul>
      </div>
    </div>
  </div>
</div>
