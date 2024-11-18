<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_news".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string|null $author
 * @property string|null $published_at
 * @property string|null $source
 * @property string|null $tags
 * @property string|null $image_url
 * @property string|null $status
 */
class Ainews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content', 'status'], 'string'],
            [['published_at'], 'safe'],
            [['title', 'source', 'tags', 'image_url'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100],
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
            'content' => 'Content',
            'author' => 'Author',
            'published_at' => 'Published At',
            'source' => 'Source',
            'tags' => 'Tags',
            'image_url' => 'Image Url',
            'status' => 'Status',
        ];
    }
}
