<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Codpostal;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Empregado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empregado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?php 
    $codPostal=Codpostal::find()->all(); 
    $listData=ArrayHelper::map($codPostal,'cod_postal','cod_postal', 'localidade');
     ?>

    <?= $form->field($model, 'cod_postal')->dropDownList($listData, ['prompt'=>'Selecione a localidade'])->label('Código Postal') ?>

    <?= $form->field($model, 'n_porta')->textInput(['maxlength' => true])->label('Nº da Porta') ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
