<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registar */

$this->title = 'Registar';
// $this->params['breadcrumbs'][] = ['label' => 'Registars', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="registar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
