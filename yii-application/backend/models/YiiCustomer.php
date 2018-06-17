<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%yii_customer}}".
 *
 * @property int $id
 * @property string $name å§“å
 * @property string $tel è”ç³»æ–¹å¼
 * @property string $addr è”ç³»åœ°å€
 * @property int $reservationsid é¢„çº¦é¡¹ç›®id
 * @property string $creator å‘å¸ƒè€…
 * @property int $created_at åˆ›å»ºæ—¶é—´
 * @property int $updated_at æ›´æ–°æ—¶é—´
 */
class YiiCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%yii_customer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tel', 'addr', 'reservationsid', 'created_at', 'updated_at'], 'required'],
            [['reservationsid', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['tel'], 'string', 'max' => 12],
            [['addr', 'creator'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'å§“å'),
            'tel' => Yii::t('app', 'è”ç³»æ–¹å¼'),
            'addr' => Yii::t('app', 'è”ç³»åœ°å€'),
            'reservationsid' => Yii::t('app', 'é¢„çº¦é¡¹ç›®id'),
            'creator' => Yii::t('app', 'å‘å¸ƒè€…'),
            'created_at' => Yii::t('app', 'åˆ›å»ºæ—¶é—´'),
            'updated_at' => Yii::t('app', 'æ›´æ–°æ—¶é—´'),
        ];
    }
}
