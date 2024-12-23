<?php
/* 
 * Team:AI很费劲
 * Coding by 阿斯雅 2210737
 * 2024/12/20
 * 建议模型
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suggestions".
 *
 * @property int $id
 * @property string $suggestion
 */
class Suggestions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suggestions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['suggestion'], 'required'],
            [['suggestion'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'suggestion' => 'Suggestion',
        ];
    }
}
