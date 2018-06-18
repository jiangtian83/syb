<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%yii_cate}}".
 *
 * @property int $id
 * @property string $catename 
 * @property string $description
 * @property int $pid
 * @property int $deep
 * @property int $type
 * @property int $views
 * @property string $creator
 * @property int $created_at
 * @property int $updated_at
 */
class YiiCate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%yii_cate}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catename'], 'required'],
            [['pid', 'deep', 'type', 'views'], 'integer'],
            [['catename'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 600],
            [['creator'], 'string', 'max' => 60],
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
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'catename' => Yii::t('app', '栏目/单页名称'),
            'description' => Yii::t('app', '简介'),
            'pid' => Yii::t('app', '父级id'),
            'deep' => Yii::t('app', '层级'),
            'type' => Yii::t('app', '类型'),
            'views' => Yii::t('app', '点击量'),
            'creator' => Yii::t('app', '创建人'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
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
