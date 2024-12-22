<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 *     
 *                   2024/12/15
 * AI 视频资源页面
 *
 * 该视图文件展示了视频资源的首页。它使用 Yii 框架提供的 `ActiveDataProvider` 动态加载视频数据，并以卡片式布局展示视频的缩略图、时长和标题。用户可以点击缩略图跳转到视频的观看页面。
 * 
 * 主要功能：
 * 1. 显示欢迎信息 (Hero Section)。
 * 2. 展示视频资源列表，包括视频的缩略图、时长、标题以及指向视频链接的按钮。
 * 3. 使用 Bootstrap 的卡片式组件 (Card) 来布局视频项。
 * 
 * 设计特点：
 * - 响应式设计，支持不同设备上的适配。
 * - 视频缩略图使用 `object-fit: cover` 保持纵横比并裁剪超出部分。
 * - 在鼠标悬停时，图片会有平滑的缩放效果。
 * 
 * 依赖：
 * 1. Yii2 框架，用于数据传输和渲染视图。
 * 2. Bootstrap 用于响应式布局和卡片组件。
 * 
 * @var $this yii\web\View 页面视图对象
 * @var $searchModel frontend\models\Aivideossearch 搜索模型
 * @var $dataProvider yii\data\ActiveDataProvider 数据提供者，加载视频资源
 * 
 */
use yii\helpers\Html;
use yii\helpers\Url;
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

    