<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empregado */

$this->title = 'Update Empregado: ' . $model->id_empregado;
// $this->params['breadcrumbs'][] = ['label' => 'Empregados', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_empregado, 'url' => ['view', 'id' => $model->id_empregado]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="empregado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
