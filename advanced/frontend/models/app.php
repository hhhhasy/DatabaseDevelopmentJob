<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_applications".
 *
 * @property int $application_id
 * @property string $name
 * @property string|null $description
 * @property string|null $category
 * @property string|null $industry
 * @property string|null $use_cases
 */
class app extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_applications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'use_cases'], 'string'],
            [['name', 'category', 'industry'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'application_id' => 'Application ID',
            'name' => 'Name',
            'description' => 'Description',
            'category' => 'Category',
            'industry' => 'Industry',
            'use_cases' => 'Use Cases',
        ];
    }
}
