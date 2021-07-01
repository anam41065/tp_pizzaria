<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = 'Update Cliente: ' . $model->num_cliente;
// $this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->num_cliente, 'url' => ['view', 'id' => $model->num_cliente]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
