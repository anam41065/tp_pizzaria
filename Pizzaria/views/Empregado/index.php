<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpregadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empregados';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="empregado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Novo Empregado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_empregado',
            'nome',
            'contacto',
            'rua',
            'cod_postal',
            'n_porta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
