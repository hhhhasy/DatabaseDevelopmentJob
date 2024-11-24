<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_learning_videos".
 *
 * @property int $Video_ID
 * @property string $Title
 * @property string $Instructor
 * @property string $Platform
 * @property string|null $Duration
 * @property string|null $Description
 * @property string|null $Video_Link
 */
class Aivideos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_learning_videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Instructor', 'Platform'], 'required'],
            [['Description'], 'string'],
            [['Title', 'Instructor', 'Platform', 'Video_Link'], 'string', 'max' => 255],
            [['Duration'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Video_ID' => 'Video ID',
            'Title' => 'Title',
            'Instructor' => 'Instructor',
            'Platform' => 'Platform',
            'Duration' => 'Duration',
            'Description' => 'Description',
            'Video_Link' => 'Video Link',
        ];
    }
}
