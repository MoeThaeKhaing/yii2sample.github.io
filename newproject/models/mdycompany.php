<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mdycompany".
 *
 * @property int $id
 * @property string $Name
 * @property string $Address
 * @property string $Type
 */
class mdycompany extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mdycompany';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Type'], 'required'],
            [['Name'], 'string'],
            [['Address', 'Type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Address' => 'Address',
            'Type' => 'Type',
        ];
    }
}
