<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ainews */

$this->title = 'Create Ainews';
$this->params['breadcrumbs'][] = ['label' => 'Ainews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ainews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
