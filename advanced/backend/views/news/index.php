<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Newsssearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <!-- Page Title -->
    <div class="page-header mb-4">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
    </div>

    <!-- Create News Button -->
    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- News Table -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'headerOptions' => ['style' => 'width: 50px;']],
            
            'id',
            'title',
            [
                'attribute' => 'publish_time',
                'format' => ['date', 'php:d-m-Y'], // Format date
                'headerOptions' => ['style' => 'width: 150px;'],
            ],
            [
                'attribute' => 'content',
                'format' => 'ntext',
                'headerOptions' => ['style' => 'width: 250px;'],
                'contentOptions' => ['style' => 'max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'],
            ],
            'tags',

            ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['style' => 'width: 100px;']],
        ],
        'tableOptions' => ['class' => 'table table-striped table-hover'], // Make table striped and hoverable
    ]); ?>
    
</div>

<!-- Custom Styles -->
<style>
    /* Styling page header */
    .page-header h1 {
        font-family: 'Helvetica', sans-serif;
        font-weight: bold;
        color: #333;
        text-align: center;
    }

    /* Style for the Create News button */
    .btn-lg {
        font-size: 1.2rem;
        padding: 12px 24px;
    }

    /* Table style */
    .table {
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 15px;
        text-align: left;
    }

    .table th {
        background-color: #f8f9fa;
        color: #495057;
        border-bottom: 2px solid #dee2e6;
    }

    .table td {
        background-color: #ffffff;
        border-bottom: 1px solid #dee2e6;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    /* Hover effect for rows */
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Table Column Header Styles */
    .yii-grid-view thead th {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    /* Table Content Styling */
    .yii-grid-view .summary {
        font-size: 1rem;
        color: #777;
    }

    /* Add spacing for the page */
    .news-index {
        margin: 20px;
    }
</style>
