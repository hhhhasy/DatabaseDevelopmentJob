<?php

use yii\helpers\Html;

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
