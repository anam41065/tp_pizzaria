<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */

$this->title = 'Update Veiculo: ' . $model->matricula;
// $this->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->matricula, 'url' => ['view', 'id' => $model->matricula]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="veiculo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
