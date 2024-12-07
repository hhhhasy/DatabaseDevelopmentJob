<?php
/* @var $this yii\web\View */
$this->title = 'AI Innovation Platform';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->title?></title>
    <!-- 引入Bootstrap CSS（根据实际情况调整版本和路径） -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- 引入Font Awesome图标库CSS（用于显示图标） -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* 英雄部分样式 */
       .hero-section {
            position: relative;
            background-image: url('http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/home/AI.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
        }

       .text-container {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px;
            margin-left: 20px;
            border-radius: 10px;
            max-width: 400px;
        }

       .text-container h1 {
            font-size: 48px;
            color: #ffcc00;
            font-weight: bold;
            margin-bottom: 20px;
        }

       .text-container.lead {
            font-size: 20px;
            color: white;
        }

       .text-container.btn {
            background: #ff6600;
            border: none;
            padding: 15px 40px;
            font-size: 18px;
            text-transform: uppercase;
            border-radius: 5px;
            color: white;
        }

        /* 功能列图标样式调整 */
       .col-lg-4 i {
            font-size: 48px;
            margin-bottom: 10px;
            display: block;
        }

        /* 页脚部分样式 */
        footer {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 20px;
        }

        footer div {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
        }

        footer h4 {
            color: #00aaff;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li a {
            color: white;
            text-decoration: none;
        }

        footer img {
            max-width: 120px;
            margin-bottom: 20px;
        }

        footer button {
            background-color: #00aaff;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        footer.social-media a {
            color: white;
            font-size: 30px;
        }
    </style>
</head>

<body>

    <!-- Hero Section with Background Image -->
    <div class="hero-section" style="position: relative; background-image: url('http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/home/AI.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: flex-start; align-items: center; padding: 20px;">
        <!-- Title Text on the Left Side -->
        <div class="text-container" style="background: rgba(0, 0, 0, 0.5); padding: 30px; margin-left: 20px; border-radius: 10px; max-width: 400px;">
            <h1 style="font-size: 48px; color: #ffcc00; font-weight: bold; margin-bottom: 20px;">AI改变世界</h1>
            <p class="lead" style="font-size: 20px; color: white;">欢迎来到该平台</p>
            <a class="btn btn-lg btn-primary" href="#about-section" style="background: #ff6600; border: none; padding: 15px 40px; font-size: 18px; text-transform: uppercase; border-radius: 5px; color: white;">Learn More</a>
        </div>
    </div>

    <!-- Body Content -->
    <div id="about-section" class="body-content" style="margin-top: 40px; padding: 0 15px;">
    <h1 style="text-align: center; color: #000000;">网站功能</h1>

<!-- Features Section -->
<div class="row" style="text-align: center; margin-top: 50px;">
    <!-- 第一列 -->
    <div class="col-lg-3" style="padding: 20px;">
        <i class="fa fa-laptop" style="font-size: 24px;"></i> <!-- 这里增大了图标的字体大小，可按需调整数值 -->
        <h2 style="color: #00008B;">AI Applications</h2>
        <p style="color: #000000; font-size: 16px;">
            展示当今AI前沿应用
        </p>
        <p><a class="btn btn-default" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=app%2Findex" style="color: #00008B; text-decoration: none;">Explore AI Applications &raquo;</a></p>
    </div>
    <!-- 第二列 -->
    <div class="col-lg-3" style="padding: 20px;">
        <i class="fa fa-book" style="font-size: 24px;"></i>
        <h2 style="color: #00008B;">AI Resources</h2>
        <p style="color: #000000; font-size: 16px;">
            提供有关AI的视频和工具资源
        </p>
        <p><a class="btn btn-default" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitools%2Findex" style="color: #00008B; text-decoration: none;">Browse Resources &raquo;</a></p>
    </div>
    <!-- 第三列 -->
    <div class="col-lg-3" style="padding: 20px;">
        <i class="fa fa-newspaper-o" style="font-size: 24px;"></i>
        <h2 style="color: #00008B;">AI News</h2>
        <p style="color: #000000; font-size: 16px;">
            展示有关AI的最前沿新闻
        </p>
        <p><a class="btn btn-default" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=ainews%2Findex" style="color: #00008B; text-decoration: none;">Read the Latest &raquo;</a></p>
    </div>
    <!-- 第四列 -->
    <div class="col-lg-3" style="padding: 20px;">
        <i class="fa fa-newspaper-o" style="font-size: 24px;"></i>
        <h2 style="color: #00008B;">AI technology</h2>
        <p style="color: #000000; font-size: 16px;">
            有关AI技术的博客
        </p>
        <p><a class="btn btn-default" href="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/web/index.php?r=aitechnology%2Findex" style="color: #00008B; text-decoration: none;">Read the Latest &raquo;</a></p>
    </div>
</div>


        <!-- Creator Section -->
        <div class="row" style="margin-top: 50px; text-align: center;">
            <h3 style="color: #ffcc00;">Our Creators</h3>
            <p style="color: white; font-size: 18px; margin-bottom: 30px;">Meet the visionaries behind our platform</p>

            <!-- Creator Cards -->
            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/asy.jpg"
                         alt="Asy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Asy</h4>
                    <p style="color: white;">Expert in AI research and innovation.</p>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/loryy.jpg"
                         alt="Loryy"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Loryy</h4>
                    <p style="color: white;">Creative thinker with a passion for AI applications.</p>
                </div>
            </div>

            <div class="col-lg-4" style="padding: 20px;">
                <div style="background: #004466; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/creator/wangwang.jpg"
                         alt="Wangwang"
                         style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
                    <h4 style="color: #ffcc00;">Wangwang</h4>
                    <p style="color: white;">Innovator and leader in AI-driven solutions.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section -->
    <footer style="background-color: #1a1a1a; color: white; padding: 40px 20px;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto;">

            <!-- Logo and Contact Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <img src="logo.png" alt="Logo" style="max-width: 120px; margin-bottom: 20px;">
                <p>2011 - 2024 AI Innovation Platform</p>
                <button style="background-color: #00aaff; border: none; color: white; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer;">Contact Us</button>
            </div>

            <!-- Navigation Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h4 style="color: #00aaff;">NAVIGATION</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: white; text-decoration: none;">Home</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Solutions</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Pricing</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Customers</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Why Us</a></li>
                </ul>
            </div>

            <!-- Developers Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
                <h4 style="color: #00aaff;">DEVELOPERS</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: white; text-decoration: none;">Docs</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Setup</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Guides</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">API Reference</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div style="flex: 1; min-width: 200px; margin-bottom: 20px; text-align: center;">
                <h4 style="color: #00aaff;">FOLLOW US</h4>
                <div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: white; font-size: 30px;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add smooth scrolling behavior -->
    <script>
        // Enable smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>

</html>