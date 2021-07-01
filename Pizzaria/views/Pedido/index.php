<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidos';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
        if(!Yii::$app->user->isGuest && Yii::$app->user->identity->cargo!="Administrador"){
            
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'num_pedido',
            'quantidade',
            'descricao',
            // 'id_cliente',
            'data',
            'valor',
            //'id_empregado',
            //'id_veiculo',
            //'id_pagamento',

        ],
    ]); ?>
    <?php }else{?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'num_pedido',
            'quantidade',
            'descricao',
            // 'id_cliente',
            'data',
            'valor',
            //'id_empregado',
            //'id_veiculo',
            //'id_pagamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php }?>

</div>
