<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team_members".
 *
 * @property int $member_id
 * @property string $name
 * @property int $age
 * @property string $major
 * @property string|null $province
 * @property string|null $description
 * @property string|null $image_url
 */
class teammembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age', 'major'], 'required'],
            [['age'], 'integer'],
            [['description'], 'string'],
            [['name', 'major'], 'string', 'max' => 100],
            [['province'], 'string', 'max' => 50],
            [['image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'name' => 'Name',
            'age' => 'Age',
            'major' => 'Major',
            'province' => 'Province',
            'description' => 'Description',
            'image_url' => 'Image Url',
        ];
    }
}
