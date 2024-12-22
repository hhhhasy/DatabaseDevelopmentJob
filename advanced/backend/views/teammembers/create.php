<?php

use yii\helpers\Html;
/* 
 * Team:AI很费劲
 * Coding by 罗瑞 2210529
 * 2024/12/17
 * 成员管理
 */
/* @var $this yii\web\View */
/* @var $model backend\models\teammembers */

$this->title = 'Create Teammembers';
$this->params['breadcrumbs'][] = ['label' => 'Teammembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teammembers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
