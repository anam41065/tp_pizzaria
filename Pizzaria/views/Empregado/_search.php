<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpregadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empregado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_empregado') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'contacto') ?>

    <?= $form->field($model, 'rua') ?>

    <?= $form->field($model, 'cod_postal') ?>

    <?php // echo $form->field($model, 'n_porta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
