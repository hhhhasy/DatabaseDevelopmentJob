<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aitechnology */
/* @var $relatedTechnologies frontend\models\Aitechnology[] */

$this->title = $model->tech_name;
$this->params['breadcrumbs'][] = ['label' => 'Artificial Intelligence Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aitechnology-view">

    <!-- Hero Section for Detail Page -->
    <section class="hero-section text-center text-white" style="background-image: url('path-to-your-image.jpg'); background-size: cover; background-position: center center; padding: 100px 0;">
        <div class="container">
            <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
            <!-- Description removed as per request -->
        </div>
    </section>

    <!-- Detailed Content Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Comment Section (Discussion Panel) -->
                <div class="discussion-panel mt-5">
                    <h3 class="text-secondary">Discussion</h3>
                    <!-- Display Comments -->
                    <?php foreach ($model->comments as $comment): ?>
                        <div class="comment-block mb-4 p-4 shadow-lg rounded-lg">
                            <div class="comment-author mb-3 d-flex align-items-center">
                                <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/client.png" alt="User" class="comment-avatar rounded-circle">
                                <div class="ml-3">
                                    <strong><?= Html::encode($comment->author_name) ?></strong>
                                    <br>
                                    <span class="text-muted"><?= Yii::$app->formatter->asDate($comment->created_at, 'long') ?></span>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p><?= Html::encode($comment->comment) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    /* Comment Card Style */
    .comment-block {
        padding: 25px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover effect for comments */
    .comment-block:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    /* Avatar style */
    .comment-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    /* Author's name and date */
    .comment-author {
        font-size: 1.1rem;
        color: #333;
    }

    .comment-author span {
        font-size: 0.9rem;
        color: #999;
    }

    /* Comment content style */
    .comment-content p {
        font-size: 1.1rem;
        color: #555;
    }

    /* Discussion panel style */
    .discussion-panel {
        background-color: #fafafa;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Title in discussion */
    .discussion-panel h3 {
        font-size: 1.7rem;
        color: #333;
        margin-bottom: 25px;
    }

</style>
