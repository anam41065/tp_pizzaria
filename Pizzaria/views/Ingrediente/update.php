<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ingrediente */

$this->title = 'Update Ingrediente: ' . $model->id_ingrediente;
// $this->params['breadcrumbs'][] = ['label' => 'Ingredientes', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_ingrediente, 'url' => ['view', 'id' => $model->id_ingrediente]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="ingrediente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
