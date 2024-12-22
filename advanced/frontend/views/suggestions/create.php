<?php

use yii\helpers\Html;
/* 
 * Team:AI很费劲
 * Coding by 阿斯雅 2210737
 * 2024/12/20
 * 建议
 */
/* @var $this yii\web\View */
/* @var $model frontend\models\Suggestions */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= Html::encode($this->title)?></title>
    <!-- 这里可以引入相关的CSS框架或者自定义样式来美化，比如简单添加内联样式先实现方框效果 -->
    <style>
      .suggestions-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- 用一个div包裹整个内容，添加样式类形成方框效果 -->
    <div class="suggestions-container">
        <div class="suggestions-create">
            <h1><?= Html::encode($this->title)?></h1>
            <?= $this->render('_form', [
                'model' => $model,
            ])?>
        </div>
    </div>

</body>

</html>
