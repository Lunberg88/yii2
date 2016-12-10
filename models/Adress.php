<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adress".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $email
 * @property string $city
 * @property string $street
 * @property integer $house
 */
class Adress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'email', 'city', 'street', 'house'], 'required'],
            [['user_id', 'house'], 'integer'],
            [['email'], 'string', 'max' => 255],
            [['city', 'street'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'email' => 'Email',
            'city' => 'City',
            'street' => 'Street',
            'house' => 'House',
        ];
    }
}
