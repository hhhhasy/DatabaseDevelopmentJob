<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 * 2024/12/10
 * AI技术论坛
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitechnology */

$this->title = 'Create Aitechnology';
$this->params['breadcrumbs'][] = ['label' => 'Aitechnologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitechnology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
