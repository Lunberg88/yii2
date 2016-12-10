<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $male
 * @property string $date
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'male', 'date'], 'required'],
            [['age'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['male'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'male' => 'Male',
            'date' => 'Date',
        ];
    }
}
