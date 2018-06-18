<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%yii_art}}".
 *
 * @property int $id
 * @property string $title æ ç›®å
 * @property string $description æè¿°
 * @property int $cateid çˆ¶çº§æ ç›®å
 * @property int $views é¡µé¢ç‚¹å‡»é‡
 * @property string $creator å‘å¸ƒè€…
 * @property int $created_at åˆ›å»ºæ—¶é—´
 * @property int $updated_at æ›´æ–°æ—¶é—´
 */
class YiiArt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%yii_art}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['cateid', 'views'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 600],
            [['content'], 'string', 'max' => 6000],
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
            'title' => Yii::t('app', '文章标题'),
            'description' => Yii::t('app', '文章描述'),
            'content' => Yii::t('app', '文章内容'),
            'cateid' => Yii::t('app', '所属栏目'),
            'views' => Yii::t('app', '点击量'),
            'creator' => Yii::t('app', '发布人'),
            'created_at' => Yii::t('app', '发布时间'),
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
