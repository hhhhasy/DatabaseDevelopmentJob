<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\abnews */

$this->title = 'Create Abnews';
$this->params['breadcrumbs'][] = ['label' => 'Abnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
