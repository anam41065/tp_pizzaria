<?php

/* @var $this yii\web\View */

$this->title = 'Pizzaria';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bem-vindo à Pizzaria Mestre!</h1>

        <p class="lead">Consulte todas as pizzas e ingredientes disponíveis no Restaurente.</p>

<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <?php
        if(!Yii::$app->user->isGuest){
            
            ?> <div class="row">
            <div class="col-lg-6">
                <h2>Pizzas</h2>

                <p>Aqui poderá encontrar todas as pizzas que atualmente estão disponíveis na Pizzaria Mestre!</p>

                <p><a class="btn btn-default" href="/index.php?r=pizza/index">Pizzas</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Ingredientes</h2>

                <p>Aqui poderá encontrar os ingredientes de cada Pizza!</p>

                <p><a class="btn btn-default" href="/index.php?r=ingrediente/index">Ingredientes</a></p>
            </div>
            
        </div>
        <?php
        }
        ?>
    </div>
</div>