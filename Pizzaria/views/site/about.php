<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Pizzaria';
$email= 'ana@gmail.com';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Bem-vindo à Pizzaria Mestre. 
        <?php
        if(Yii::$app->user->isGuest){ ?> 
            Para poder ver as nossas Pizzas faça <b>Login</b>  e desfrute! 
        <?php }?>
    </p>
    <p>
    Caso esteja interessado em fazer parte da nossa equipa envie email com Currículo para o <?=Html::encode($email) ?>
    </p>
    <img src="https://conteudo.imguol.com.br/c/entretenimento/b7/2020/12/09/pizza-no-forno-a-lenha-1607567438453_v2_900x506.jpg.webp" style="width: 82.5%; height: 100%">
</div>
