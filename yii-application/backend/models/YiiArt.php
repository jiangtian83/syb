<?php

namespace backend\models;

use Yii;

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
            [['title', 'created_at', 'updated_at'], 'required'],
            [['cateid', 'views', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 200],
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
            'title' => Yii::t('app', 'æ ç›®å'),
            'description' => Yii::t('app', 'æè¿°'),
            'cateid' => Yii::t('app', 'çˆ¶çº§æ ç›®å'),
            'views' => Yii::t('app', 'é¡µé¢ç‚¹å‡»é‡'),
            'creator' => Yii::t('app', 'å‘å¸ƒè€…'),
            'created_at' => Yii::t('app', 'åˆ›å»ºæ—¶é—´'),
            'updated_at' => Yii::t('app', 'æ›´æ–°æ—¶é—´'),
        ];
    }
}
