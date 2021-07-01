<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pizza */

$this->title = 'Novo Pizza';
// $this->params['breadcrumbs'][] = ['label' => 'Pizzas', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pizza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
