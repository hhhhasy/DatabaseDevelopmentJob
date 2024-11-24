<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AiNews */

$this->title = 'Create Ai News';
$this->params['breadcrumbs'][] = ['label' => 'Ai News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ai-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
