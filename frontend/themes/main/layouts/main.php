<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;

use frontend\assets\ThemeAsset;

$assets = ThemeAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta name="charset" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="author" content="http://www.lava.mx">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="revisit-after" content="14 Days">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>
  </head>
  <body>
  <?php $this->beginBody() ?>

  <header class="Header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <?= Menu::widget([
              'encodeLabels' => false,
              'options' => ['class' => 'list-inline desktop'],
              'items' => [
                ['label' => Html::img($assets->baseUrl . '/img/autojal-logo.png', ['alt' => 'Autojal']), 'url' => ['/site/index']],
                ['label' => 'NOSOTROS', 'url' => ['/site/about']],
                ['label' => 'AUTOS NUEVOS', 'url' => ['/site/product-brands']],
                ['label' => 'AUTOS SEMINUEVOS', 'url' => ['/site/product']],
                ['label' => 'AUTOS DEMO', 'url' => ['/site/product']],
                ['label' => 'NOTICIAS', 'url' => ['/site/blog']],
                ['label' => 'CONTACTO', 'url' => ['/site/contact']],
                ['label' => '<i class="fas fa-search"></i>', 'url' => ['/site/index']],
                ['label' => Html::img($assets->baseUrl . '/img/autojal-llave-icono.png', ['alt' => 'Autojal']), 'url' => ['/site/account']],
              ]
            ]); ?>
          <div class="header-mobil">
            <?= Html::a(Html::img($assets->baseUrl . '/img/autojal-logo.png', ['alt' => 'Autojal']), ['/site/index'], ['class'=>'d-block']); ?>
            <a class="open-menu" href="#" target="_blank"><i class="fas fa-bars"></i></a>
          </div>
          <?= Menu::widget([
              'encodeLabels' => false,
              'options' => ['class' => 'mobil'],
              'items' => [
                ['label' => 'NOSOTROS', 'url' => ['/site/about']],
                ['label' => 'AUTOS NUEVOS', 'url' => ['/site/product-brands']],
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

  <?= $content ?>

  <footer class="container-fluid">
    <div class="row top">
      <?= Html::img($assets->baseUrl . '/img/autojal-footer-logo.png', ['alt' => 'Autojal']); ?>
      <div class="col-sm-12"><a href="mailto:contacto@grupoautojal.com.mx"><i class="far fa-envelope"></i>contacto@grupoautojal.com.mx</a><a href="tel:(33) 1605 6756"><i class="fas fa-phone"></i>(33) 1605 6756</a><a class="mr-3" href="https://www.facebook.com/AutoJal-315051895768295/" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
      <div class="col-sm-12 mt-3"><a href="https://goo.gl/maps/Sb76R7P3RbmpUmpz5" target="_blank"><i class="fas fa-map-marker-alt"></i><b>Morelos 1520, Americana, Guadalajara, Jalisco CP.44600</b></a></div>
    </div>
    <div class="row bottom">
      <div class="col-sm-12"><a href="#">Aviso de privacidad</a><a href="#">Términos y condiciones</a></div>
    </div>
  </footer>

  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
