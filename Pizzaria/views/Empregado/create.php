<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empregado */

$this->title = 'Novo Empregado';
// $this->params['breadcrumbs'][] = ['label' => 'Empregados', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="empregado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
