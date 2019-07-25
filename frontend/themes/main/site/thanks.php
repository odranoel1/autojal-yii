<?php

  use yii\helpers\Html;

?>

<div class="Thanks container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 text-center">
      <h2 class="title-default">¡Gracias!</h2>
      <h3>Tu solicitud ha sido enviada</h3>
      <p class="mb-5">Estamos localizando tu unidad, recibirás un correo con los datos de la unidad solicitada y podrás continuar con el proceso.</p>
      <?= Html::a('SEGUIR COMPRANDO', ['site/product'], ['class' => 'btn btn-default']); ?>
    </div>
  </div>
</div>
