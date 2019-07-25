<?php

    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
?>

<div class="container-fluid">
  <div class="row filter-product">
    <div class="col-sm-10 col-sm-offset-1">
      <?php $form = ActiveForm::begin(['id' => 'search-form']); ?>

        <div class="row">
          <?= $form->field($search_model, 'brand', ['options' => ['class' => 'col-xs-6 col-md-3 item']])->dropDownList($search_model->brand_options)?>
          <?= $form->field($search_model, 'modelo', ['options' => ['class' => 'col-xs-6 col-md-3 item']])->dropDownList($search_model->modelo_options)?>
          <?= $form->field($search_model, 'version', ['options' => ['class' => 'col-xs-6 col-md-3 item']])->dropDownList($search_model->version_options)?>
          <?= $form->field($search_model, 'year', ['options' => ['class' => 'col-xs-6 col-md-3 item']])->dropDownList($search_model->year_options)?>
        </div>
        <?= Html::submitButton('Consultar', ['class' => 'btn btn-default mt-3']) ?>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
