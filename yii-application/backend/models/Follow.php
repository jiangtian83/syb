<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%follow}}".
 *
 * @property integer $uid
 * @property integer $fid
 */
class Follow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%yii_follow}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'fid'], 'required'],
            [['uid', 'fid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'fid' => 'Fid',
        ];
    }
}
