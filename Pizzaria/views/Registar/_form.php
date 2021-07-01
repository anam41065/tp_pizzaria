<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->hiddenInput(['readonly'=> true, 'value' => 'Cliente'])->label('') ?>
    
    <?= $form->field($model, 'authKey')->hiddenInput(['readonly'=> true, 'value' => '555'])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton('Registar', ['class' => 'btn btn-success']);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
