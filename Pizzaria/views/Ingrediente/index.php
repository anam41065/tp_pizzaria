<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IngredienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ingredientes';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingrediente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        if(!Yii::$app->user->isGuest && Yii::$app->user->identity->cargo!="Cliente"){
            
            ?>
    <p>
        <?= Html::a('Novos Ingredientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php }?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
        if(!Yii::$app->user->isGuest && Yii::$app->user->identity->cargo!="Administrador" && Yii::$app->user->identity->cargo!="Cozinheiro"){
            
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_ingrediente',
            'nome',
            'quantidade',
            'descricao'
        ],
    ]); ?>
    
    <?php } else { ?>
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
    
                // 'id_ingrediente',
                'nome',
                'quantidade',
                'descricao',
    
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    } ?>


</div>
