<?php

use yii\helpers\Html;
/* 
 * Team:AI很费劲
 * Coding by 阿斯雅 2210737
 * 2024/12/20
 * 建议
 */
/* @var $this yii\web\View */
/* @var $model frontend\models\Suggestions */

$this->title = 'Update Suggestions: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suggestions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suggestions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
