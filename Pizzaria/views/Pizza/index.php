<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PizzaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pizzas';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pizza-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        if(!Yii::$app->user->isGuest && Yii::$app->user->identity->cargo!="Cliente"){
            
            ?>
    <p>
        <?= Html::a('Nova Pizza', ['create'], ['class' => 'btn btn-success']) ?>
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

            // 'numero',
            'nome',
            'preco',
            'tamanho',
            // 'id_massa',
        ],
    ]); ?>
    <?php } else { ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'numero',
            'nome',
            'preco',
            'tamanho',
            'id_massa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<?php } ?>
</div>
