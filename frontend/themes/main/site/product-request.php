<?php

  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;

 ?>

<div class="Request-product">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 mt-5"><span class="breadcrumbs"><a href="product.html">AUTOS NUEVOS </a>/ <a href="product-brands.html">MARCA </a>/ <a href="product-detail.html">JEEP </a>/ <a href="product-detail.html">GRAND CHEROKEE </a>	/ <a href="request-product.html"><b>APARTAR</b></a></span></div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">
        <h2 class="title-default">Solicitar unidad</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">
        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'form-request-prod']]); ?>
          <div class="row">
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>EJECUTIVO</h3>
                <hr>
              </div>
              <?= $form->field($model, 'executive_number')->textInput(['autofocus' => true]) ?>
              <?= $form->field($model, 'executive_name') ?>
              <?= $form->field($model, 'executive_email') ?>
              <?= $form->field($model, 'executive_phone') ?>
              <?= $form->field($model, 'executive_cel') ?>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>CLIENTE</h3>
                <hr>
              </div>
              <?= $form->field($model, 'customer_name') ?>
              <?= $form->field($model, 'customer_folio') ?>
              <?= $form->field($model, 'customer_email') ?>
              <?= $form->field($model, 'customer_phone') ?>
              <?= $form->field($model, 'customer_comments')->textarea(['rows' => 1]) ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="title">
                <h3>AGENCIAS</h3>
                <hr>
              </div>
              <?= $form->field($model,'agency')->radioList($model->agency_options, ['item' => function ($index, $label, $name, $checked, $value) {
                return '<div class="radio">' .
                       '<label class="select-radio">' .
                       Html::radio($name, $checked, ['value' => $value]) .
                       " {$label}" .
                       '</label>' .
                      '</div>';
              }])->label(false); ?>

              <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
              'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>']) ?>
              <?= Html::submitButton('ENVIAR', ['class' => 'btn btn-default my-5', 'name' => 'contact-button']); ?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>

        <?php if (Yii::$app->session->hasFlash('error')): ?>
          <div class="notify warning">
            <?= Yii::$app->session->getFlash('error'); ?>
          </div>
        <?php endif; ?>
        <form class="form-request-prod" action="">
          <!-- <div class="row">
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>EJECUTIVO</h3>
                <hr>
              </div>
              <label>No. Usuario de Ejecutivo</label>
              <input class="form-control" type="text">
              <label>Nombre</label>
              <input class="form-control" type="text">
              <label>Mail</label>
              <input class="form-control" type="text">
              <label>Teléfono fijo</label>
              <input class="form-control" type="text">
              <label>Celular</label>
              <input class="form-control" type="text">
            </div>
            <div class="col-sm-6 form-group mb-5">
              <div class="title">
                <h3>CLIENTE</h3>
                <hr>
              </div>
              <label>Nombre</label>
              <input class="form-control" type="text">
              <label>Folio de autorización de crédito</label>
              <input class="form-control" type="text">
              <label>Correo electrónico</label>
              <input class="form-control" type="text">
              <label>Teléfono</label>
              <input class="form-control" type="text">
              <label>Comentarios</label>
              <textarea class="form-control" name="" cols="30" rows="1"></textarea>
            </div>
          </div> -->
          <!-- <div class="row">
            <div class="col-sm-12">
              <div class="title">
                <h3>AGENCIAS</h3>
                <hr>
              </div>
              <div class="radio">
                <label class="select-radio" for="">
                  <input type="radio" name="optradio" checked value="1">AGENCIAS DE LA MARCA EN MI ZONA
                </label>
              </div>
              <div class="radio">
                <label class="select-radio" for="">
                  <input type="radio" name="optradio" value="2">SELECCIÓN POR AGENCIA
                </label>
                <div class="select select-agency d-none">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Colomos</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Magno</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Excelencia</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Glz Gallo</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Acueducto</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Honda Vanguardia</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="radio">
                <label class="select-radio" for="">
                  <input type="radio" name="optradio" value="3">SELECCIÓN POR ZONA
                </label>
                <div class="select select-zone d-none">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Jalisco</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Michoacán</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Nayarit</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Guanajuato</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Aguascalientes</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Colima</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Guanajuato</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="effect">Sinaloa</span>
                    </label>
                  </div>
                </div>
              </div>
              <input class="btn btn-default my-5" type="submit" value="ENVIAR">
            </div>
          </div> -->
        </form>
      </div>
    </div>
  </div>
</div>
