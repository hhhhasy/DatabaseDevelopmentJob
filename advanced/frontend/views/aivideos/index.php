<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Aivideossearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aivideos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aivideos-index">

    <!-- Hero Section -->
    <section class="hero-section text-center text-white" style="background-image: url('path-to-your-hero-image.jpg'); background-size: cover; background-position: center center; padding: 100px 0;">
        <div class="container">
            <h1 class="display-4">Welcome to Aivideos</h1>
            <p class="lead">Explore the latest AI videos from various platforms and learn from the best instructors.</p>
            <?= Html::a('Browse Videos', ['#'], ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
    </section>

    <h1 class="text-center mt-5"><?= Html::encode($this->title) ?></h1>

    <p class="text-right">
        <?= Html::a('Create Aivideos', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <?php foreach ($dataProvider->models as $video): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="<?= Html::encode($video->Video_Link) ?>" class="card-img-top" alt="Video Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title"><?= Html::encode($video->Title) ?></h5>
                        <p class="card-text"><strong>Instructor:</strong> <?= Html::encode($video->Instructor) ?></p>
                        <p class="card-text"><strong>Platform:</strong> <?= Html::encode($video->Platform) ?></p>
                        <p class="card-text"><strong>Duration:</strong> <?= Html::encode($video->Duration) ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= Html::encode($video->Video_Link) ?>" target="_blank" class="btn btn-primary btn-block">Watch Video</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
