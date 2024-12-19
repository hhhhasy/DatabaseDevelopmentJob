<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_algorithm".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $example_image
 */
class Aialgorithm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_algorithm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'example_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'example_image' => 'Example Image',
        ];
    }
}
