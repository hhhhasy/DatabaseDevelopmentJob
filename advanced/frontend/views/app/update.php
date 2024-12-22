<?php
/* 
 * Team:AI很费劲
 * Coding by 罗瑞 2210529
 * 2024/12/13
 * AI应用
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\app */

$this->title = 'Update App: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->application_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
