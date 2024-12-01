<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ai_technology".
 *
 * @property int $id
 * @property string $tech_name
 * @property string|null $description
 * @property string|null $application_area
 * @property string $created_at
 */
class Aitechnology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ai_technology';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tech_name'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['tech_name', 'application_area'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tech_name' => 'Tech Name',
            'description' => 'Description',
            'application_area' => 'Application Area',
            'created_at' => 'Created At',
        ];
    }
}
