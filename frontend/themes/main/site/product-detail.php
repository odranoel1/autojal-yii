<?php

  use yii\helpers\Html;
  use yii\bootstrap\Collapse;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Product-detail">
  <?=  $this->render('//site/_search', ['search_model' => $search_model]); ?>
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
        <?php $form = ActiveForm::begin(['options' => [
            'id' => 'product-detail-form',
            'class' => 'select-version'
          ]]); ?>

          <?= $form->field($model, 'color', ['options' => ['class' => 'form-group color']])->radioList($model->color_options); ?>

          <?= $form->field($model, 'version', ['options' => ['class' => 'form-group version']])->radioList($model->version_options); ?>

          <div class="row">
            <div class="col-md-6 my-3">
              <?= Html::submitButton('APARTAR' . Html::tag('div',
              '<a href="#">
                <i class="fas fa-question mx-2"></i>
                <p>
                  -Tu apartado será de $2,000.00 MNX
                  (Esta cantidad se descuenta del valor de tu auto) <br><br>
                  -La plataforma Autojal se encarga de ubicar tu auto nuevo en la zona metropolitana.<br><br>
                  -Despues de ubicar tu unidad, podrás imprimir la logística para la facturación y entrega de tu unidad.<br><br>
                  -Devolución sin costo del apartado. En caso de no haber existencia de tu unidad, te daremos alternativas. Si no te interesa ninguna, te podemos hacer la devolución de tu apartado al 100%.
                </p>
              </a>', ['class' => 'pull-right question']),
              ['class' => 'btn btn-default btn-block']) ?>
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

        <?php ActiveForm::end(); ?>
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
