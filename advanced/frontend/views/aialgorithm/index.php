<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Aialgorithmsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aialgorithms';
?>
<div class="aialgorithm-index">
    <!-- 标题 -->
    <h1 style="text-align: center; color: #ffffff; margin-top: 2px;">人工智能经典算法介绍</h1>

    <!-- 星空背景 -->
    <div class="stars"></div>

    <!-- 幻灯片内容 -->
    <div class="scrollsnap-carousel">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="slide">
                <div class="content-wrapper">
                    <div class="content" title="滚动滑轮左右察看，点击查看算法详情">
                        <?= Html::a(
                            Html::img($model->example_image, [
                                'alt' => $model->name,
                                'style' => 'width:100%; height:auto; border-radius: 15px;',
                            ]),
                            ['view', 'id' => $model->id],
                            ['class' => 'image-link']
                        ) ?>
                    </div>
                </div>
                <h3><?= Html::encode($model->name) ?></h3>
                <p><?= Html::encode($model->description) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
/* 星空背景样式 */
@keyframes rotate {
    0% {
        transform: perspective(400px) rotateZ(20deg) rotateX(-40deg) rotateY(0);
    }
    100% {
        transform: perspective(400px) rotateZ(20deg) rotateX(-40deg) rotateY(-360deg);
    }
}
.stars {
    position: absolute;
    width: 200%;
    height: 200%;
    top: -50%;
    left: -50%;
    transform: perspective(500px);
    transform-style: preserve-3d;
    animation: rotate 90s infinite linear;
    z-index: 0;
}
.star {
    width: 10px;
    height: 10px;
    background: #f7f7b8;
    position: absolute;
    top: 0;
    left: 0;
    backface-visibility: hidden;
}
html, body {
    background: radial-gradient(220% 105% at top center, #1b2947 10%, #75517d 40%, #e96f92 65%, #f7f7b6);
    background-attachment: fixed;
    overflow: hidden;
    height: 100%;
    margin: 0;
    padding: 0;
}
/* 幻灯片样式 */
.scrollsnap-carousel {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 0px;
    width: 100vw;
    height: 100vh;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 0;
    box-sizing: border-box;
    justify-content: flex-start;
    z-index: 1;
    position: relative;
}
.scrollsnap-carousel::-webkit-scrollbar {
    display: none;
}
.slide {
    flex: none;
    width: 100vw;
    height: 60vh;
    scroll-snap-align: center;
    text-align: center;
    transition: transform 0.3s, opacity 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.slide:hover {
    transform: scale(1.1);
    opacity: 0.9;
    z-index: 10;
}
.content-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90%;
}
.content {
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(45deg, #6e0202, #020c6e);
    border-radius: 15px;
    padding: 10px;
    transition: all 0.5s ease;
    max-width: 60%;
    height: auto;
}
h3, p {
    width: 100%;
    color: #020c6e;
    font-size: 1.2em;
    transition: color 0.3s ease;
}
h3 {
    margin-top: 20px;
}
p {
    margin: 5px 0;
}
.slide:hover h3, .slide:hover p {
    color: #ffffff;
}
</style>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const starsContainer = document.querySelector('.stars');
    const starsCount = 1000; // 增加星星的数量

    // 初始化星星
    for (let i = 0; i < starsCount; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        const speed = 0.2 + Math.random();
        const distance = 1000 + Math.random() * 1500;
        const x = Math.random() * window.innerWidth * 2 - window.innerWidth;
        const y = Math.random() * window.innerHeight * 2 - window.innerHeight;
        star.style.transformOrigin = `0 0 ${distance}px`;
        star.style.transform = `translate3d(${x}px, ${y}px, -${distance}px)` +
                               ` rotateY(${Math.random() * 360}deg)` +
                               ` rotateX(${Math.random() * -50}deg) scale(${speed})`;
        starsContainer.appendChild(star);
    }

    // 鼠标滚动平滑效果
    const carousel = document.querySelector('.scrollsnap-carousel');
    carousel.addEventListener('wheel', (event) => {
        event.preventDefault();
        const scrollAmount = event.deltaY > 0 ? 300 : -300;
        carousel.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
});
</script>
