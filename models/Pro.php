<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pro".
 *
 * @property int $id
 * @property int $me
 * @property int $you
 * @property int $we
 */
class Pro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['me', 'you', 'we'], 'required'],
            [['me', 'you', 'we'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'me' => 'Me',
            'you' => 'You',
            'we' => 'We',
        ];
    }
}
