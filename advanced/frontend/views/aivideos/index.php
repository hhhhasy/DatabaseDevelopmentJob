      
<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Aivideossearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="aivideos-index">

    <!-- Hero Section -->
    <section >
        <div class="container">
            <h1 class="display-4">欢迎来到视频资源</h1>
        </div>
    </section>

    <h1 class="text-center mt-5"><?= Html::encode($this->title) ?></h1>



    <div class="row">
        <?php foreach ($dataProvider->models as $video): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="position-relative">
                        <!-- Video Thumbnail -->
                        <a href="<?= Html::encode($video->Video_Link) ?>" target="_blank">
                            <img src="<?= Html::encode($video->image_urls) ?>" class="card-img-top thumbnail-img" alt="Video Thumbnail">
                        </a>
                        
                        <!-- Duration Overlay on Image -->
                        <div class="position-absolute bottom-0 left-0 right-0 bg-dark text-white text-center py-2">
                            <?= Html::encode($video->Duration) ?>
                        </div>
                    </div>

                    <div class="card-body text-center">
                        <!-- Video Title -->
                        <h5 class="card-title"><?= Html::encode($video->Title) ?></h5>
                    </div>

                    <!-- Remove Footer Section -->
                    <!-- <div class="card-footer text-center"> -->
                    <!--     <a href="<?= Html::encode($video->Video_Link) ?>" target="_blank" class="btn btn-primary btn-block">Watch Video</a> -->
                    <!-- </div> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- Add CSS for Image Resize and Hover Effect -->
<style>
    .thumbnail-img {
        width: 100%; /* 保证图片宽度自适应 */
        height: 200px; /* 设置固定高度 */
        object-fit: cover; /* 保持图片纵横比，裁剪超出部分 */
        transition: transform 0.3s ease; /* 添加平滑过渡效果 */
    }

    .thumbnail-img:hover {
        transform: scale(1.05); /* 鼠标悬停时略微放大 */
    }
</style>

    