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

$this->title = 'Create Aialgorithm';
$this->params['breadcrumbs'][] = ['label' => 'Aialgorithms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aialgorithm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
