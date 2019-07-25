<?php

  use yii\helpers\Html;
  use frontend\assets\ThemeAsset;
  $assets = ThemeAsset::register($this);

?>

<div class="Blog-detail">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 my-5">
        <h2 class="title-default"><a href="blog.html"><i class="fas fa-chevron-left mr-4"></i>En 2024, 57% de los autos será eléctrico</a></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 info">
        <?= Html::img($assets->baseUrl . '/img/autojal-blog-detail.png', ['class' => 'img-responsive', 'alt' => 'Autojal']); ?>
        <p>Los automóviles eléctricos representan solo una pequeña fracción de los automóviles vendidos en todo el mundo, pero eso cambiará rápidamente, según un análisis de Bloomberg New Energy Finance (BNEF).<br><br>
          Para 2040, los autos eléctricos podrían representar el 57% de todas las ventas de autos de pasajeros en todo el mundo, según el informe. Eso es un aumento de dos puntos porcentuales con respecto a la proyección 2040 de BNEF el año pasado. Los vehículos eléctricos representarán un porcentaje similar de las ventas de vehículos comerciales ligeros en Estados Unidos, Europa y China dentro de ese tiempo, predice BNEF.<br><br>
          “Vemos una posibilidad real de que las ventas globales de automóviles de pasajeros convencionales ya hayan superado su pico”, dijo Colin McKerracher, jefe de transporte avanzado de BNEF.<br><br>
          Los autos eléctricos se aproximan a los autos de gasolina y diesel en el precio de compra y ya cuestan menos para operar. Eso significa que los autos eléctricos pronto superarán a los autos de combustión interna como la opción más económica para los consumidores, según el nuevo informe.<br><br>
          Durante las próximas dos décadas, las ventas mundiales de vehículos eléctricos aumentarán de 2 millones el año pasado a 56 millones para 2040, predice BNEF. Al mismo tiempo, las ventas de vehículos “convencionales” se reducirán de los 85 millones del año pasado a sólo 42 millones en todo el mundo.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 mb-5"><b>COMPARTIR</b><a class="ml-3" href="http://" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
    </div>
  </div>
</div>
