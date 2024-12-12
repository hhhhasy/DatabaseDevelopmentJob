<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $publish_time
 * @property string $content
 * @property string|null $tags
 * @property string|null $image_url
 */
class abnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'publish_time', 'content'], 'required'],
            [['publish_time'], 'safe'],
            [['content'], 'string'],
            [['title', 'tags', 'image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'publish_time' => 'Publish Time',
            'content' => 'Content',
            'tags' => 'Tags',
            'image_url' => 'Image Url',
        ];
    }
}
