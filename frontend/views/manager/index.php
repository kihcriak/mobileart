<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Управление контентом';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul class="list-group">
        <li class="list-group-item">
            <?= Html::a('Регионы', ['manager/region']) ?>
        </li>
        <li class="list-group-item">
            <?= Html::a('Памятники', ['manager/site']) ?>
        </li>
    </ul>
</div>