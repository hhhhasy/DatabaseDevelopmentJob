<?php
/* 
 * Team:AI很费劲
 * Coding by 罗瑞 2210529
 * 2024/12/8
 * AI算法
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aialgorithm */

$this->title = 'Update Aialgorithm: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Aialgorithms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aialgorithm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
