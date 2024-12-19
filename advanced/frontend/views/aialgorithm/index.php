<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Aialgorithmsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aialgorithms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aialgorithm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aialgorithm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'example_image',
            'animation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
