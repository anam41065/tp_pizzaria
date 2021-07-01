<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PizzaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pizza-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'preco') ?>

    <?= $form->field($model, 'tamanho') ?>

    <?= $form->field($model, 'id_massa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
