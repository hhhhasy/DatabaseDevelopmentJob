<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_tools".
 *
 * @property int $Tool_ID
 * @property string $Tool_Name
 * @property string $Tool_Type
 * @property string|null $Description
 * @property string|null $Official_Link
 * @property string|null $image_url
 */
class Aitools extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_tools';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tool_Name', 'Tool_Type'], 'required'],
            [['Description'], 'string'],
            [['Tool_Name', 'Tool_Type', 'Official_Link', 'image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Tool_ID' => 'Tool ID',
            'Tool_Name' => 'Tool Name',
            'Tool_Type' => 'Tool Type',
            'Description' => 'Description',
            'Official_Link' => 'Official Link',
            'image_url' => 'Image Url',
        ];
    }
}
