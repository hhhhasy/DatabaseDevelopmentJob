<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 * 2024/12/15
 * AI视频
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aivideos */

$this->title = 'Update Aivideos: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Aivideos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->Video_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aivideos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
