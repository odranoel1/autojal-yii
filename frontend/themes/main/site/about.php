<?php

  use yii\helpers\Html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="About">
  <div class="container-fluid">
    <div class="row info">
      <div class="col-xs-12 col-sm-6 col-sm-offset-1">
        <h2 class="my-5"><b>GENERADORES DE NEGOCIOS <br></b>EN LA INDUSTRIA AUTOMOTRIZ</h2>
        <p>
          Autojal se forma como una opción ante los grandes cambios en el entorno automotriz,
          que busca poner al alcance de los compradores herramientas digitales que les permitan
          experimientar experiencias de compra innovadoras y realizar inversiones seguras,
          poniendo a sus alcance toda la información  necesaria para una compra inteligente
          de las principales marcas automotrices del país.<br><br>
          Así mismo buscamos apoyar a las financieras y agencias automotrices con estas
          herramientas a fin de brindar una atención innovadora y de calidad a sus clientes.
        </p>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-1 px-0">
        <?= Html::img($assets->baseUrl . '/img/autojal-nosotros.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 my-5">
        <h2><b>DIRECTORIO</b></h2>
      </div>
    </div>
    <div class="row directory">
      <div class="col-sm-6 col-sm-offset-1">
        <p>ÁREA COMERCIAL</p>
        <div class="item"><b>ABRAHAM ALMODOVAR</b><a href="mailto:almodovar@autojal.mx">almodovar@autojal.mx</a></div>
        <p>ÁREA OPERATIVA</p>
        <div class="item"><b>JUAN MIGUEL PIMIENTA</b><a href="mailto:pimienta@autojal.mx">pimienta@autojal.mx</a></div>
        <P>ÁREA ADMINISTRATIVA</P>
        <div class="item"><b>JUAN CARLOS RAMÍREZ</b><a href="mailto:ramirez@autojal.mx">ramirez@autojal.mx</a></div>
      </div>
      <div class="col-sm-4 col-sm-offset-1"><b>CONTÁCTANOS</b><a href="tel:(33) 1605 6756">(33) 1605 6756</a></div>
    </div>
  </div>
</div>
