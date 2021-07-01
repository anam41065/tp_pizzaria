<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pizza */
/* @var $form ActiveForm */
?>
<div class="Pizzas">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'preco') ?>
        <?= $form->field($model, 'tamanho') ?>
        <?= $form->field($model, 'id_massa') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Pizzas -->
