<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Aitechnologysearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artificial Intelligence Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitechnology-index">

    <!-- Hero Section -->
    <section class="hero-section text-center text-white" style="background-image: url('path-to-your-image.jpg'); background-size: cover; background-position: center center; padding: 80px 0;">
        <div class="container">
            <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
            <p class="lead">Explore the world of AI technologies and their impact on various industries. Join the conversation, learn, and share knowledge!</p>
            <?= Html::a('Start Exploring', ['#'], ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mt-5">

        <!-- Post Filter Section -->
        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <?= Html::a('Create New Technology', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
            </div>
        </div>

        <!-- Technology Posts Section -->
        <div class="row">
            <?php foreach ($dataProvider->models as $technology): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100 border-light rounded">
                        <div class="card-body">
                            <h5 class="card-title"><?= Html::encode($technology->tech_name) ?></h5>
                            <p class="card-text"><?= Html::encode($technology->description) ?></p>
                            <p><strong>Application Area:</strong> <?= Html::encode($technology->application_area) ?></p>
                            <p><small><strong>Created On:</strong> <?= Yii::$app->formatter->asDate($technology->created_at, 'long') ?></small></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= Url::to(['view', 'id' => $technology->id]) ?>" class="btn btn-info btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <?= \yii\widgets\LinkPager::widget([
                    'pagination' => $dataProvider->pagination,
                    'options' => ['class' => 'pagination justify-content-center'],
                ]) ?>
            </div>
        </div>
        
        <!-- Comment Section (Discussion Panel) -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4">Join the Discussion</h2>
                <div class="discussion-panel">
                    <!-- Example of comment block -->
                    <div class="comment-block">
                        <div class="comment-author">
                            <strong>John Doe</strong> <span class="text-muted">- <?= Yii::$app->formatter->asDate('2024-01-01', 'long') ?></span>
                        </div>
                        <div class="comment-content">
                            <p>This technology is amazing! I believe it can revolutionize several industries, especially in healthcare and transportation.</p>
                        </div>
                    </div>

                    <!-- Another comment block -->
                    <div class="comment-block">
                        <div class="comment-author">
                            <strong>Jane Smith</strong> <span class="text-muted">- <?= Yii::$app->formatter->asDate('2024-01-02', 'long') ?></span>
                        </div>
                        <div class="comment-content">
                            <p>I agree, but I think there are still some challenges in terms of safety and regulations. We need to make sure these technologies are implemented ethically.</p>
                        </div>
                    </div>
                </div>

                <!-- Add Comment Form -->
                <div class="comment-form mt-4">
                    <h5>Leave a Comment</h5>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Write your comment here..." required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Custom Styles -->
<style>
    .hero-section {
        background-size: cover;
        background-position: center center;
        padding: 80px 0;
        color: white;
    }
    .discussion-panel {
        border-top: 1px solid #ddd;
        padding-top: 20px;
    }
    .comment-block {
        padding: 15px;
        border-bottom: 1px solid #f0f0f0;
    }
    .comment-block .comment-author {
        font-weight: bold;
    }
    .comment-form textarea {
        border-radius: 5px;
        box-shadow: none;
        resize: none;
    }
</style>

