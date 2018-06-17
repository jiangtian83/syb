<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%yii_cate}}".
 *
 * @property int $id
 * @property string $catename æ ç›®å
 * @property string $description æè¿°
 * @property int $pid çˆ¶çº§id
 * @property int $deep å±‚çº§
 * @property int $type ç±»åž‹ï¼Œ0æ™®é€šæ ç›®ï¼Œ1é¡¹ç›®é¡µï¼Œ2æ™®é€šå•é¡µ
 * @property int $views æ ç›®ç‚¹å‡»é‡
 * @property string $creator å‘å¸ƒè€…
 * @property int $created_at åˆ›å»ºæ—¶é—´
 * @property int $updated_at æ›´æ–°æ—¶é—´
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
            [['catename', 'created_at', 'updated_at'], 'required'],
            [['pid', 'deep', 'type', 'views', 'created_at', 'updated_at'], 'integer'],
            [['catename'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 600],
            [['creator'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'catename' => Yii::t('app', 'æ ç›®å'),
            'description' => Yii::t('app', 'æè¿°'),
            'pid' => Yii::t('app', 'çˆ¶çº§id'),
            'deep' => Yii::t('app', 'å±‚çº§'),
            'type' => Yii::t('app', 'ç±»åž‹ï¼Œ0æ™®é€šæ ç›®ï¼Œ1é¡¹ç›®é¡µï¼Œ2æ™®é€šå•é¡µ'),
            'views' => Yii::t('app', 'æ ç›®ç‚¹å‡»é‡'),
            'creator' => Yii::t('app', 'å‘å¸ƒè€…'),
            'created_at' => Yii::t('app', 'åˆ›å»ºæ—¶é—´'),
            'updated_at' => Yii::t('app', 'æ›´æ–°æ—¶é—´'),
        ];
    }
}
