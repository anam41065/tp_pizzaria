<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pizza */

$this->title = 'Update Pizza: ' . $model->numero;
// $this->params['breadcrumbs'][] = ['label' => 'Pizzas', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->numero, 'url' => ['view', 'id' => $model->numero]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="pizza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
