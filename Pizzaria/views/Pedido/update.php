<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */

$this->title = 'Update Pedido: ' . $model->num_pedido;
// $this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->num_pedido, 'url' => ['view', 'id' => $model->num_pedido]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
