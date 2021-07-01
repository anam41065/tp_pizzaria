<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'num_pedido') ?>

    <?= $form->field($model, 'quantidade') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'id_cliente') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'valor') ?>

    <?php // echo $form->field($model, 'id_empregado') ?>

    <?php // echo $form->field($model, 'id_veiculo') ?>

    <?php // echo $form->field($model, 'id_pagamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
