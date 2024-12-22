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

$this->title = 'Create App';
$this->params['breadcrumbs'][] = ['label' => 'Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
