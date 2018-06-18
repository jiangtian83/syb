<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

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
            [['name', 'tel', 'addr', 'reservationsid'], 'required'],
            [['reservationsid'], 'integer'],
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
            'name' => Yii::t('app', '姓名'),
            'tel' => Yii::t('app', '电话'),
            'addr' => Yii::t('app', '地址'),
            'reservationsid' => Yii::t('app', '预约项目'),
            'creator' => Yii::t('app', '创建人'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('unix_timestamp()'),
            ],
        ];
    }

    /**
     * @param bool $refresh
     * @return static
     */
    public static function instance($refresh = false){
        return new static();
    }
}
