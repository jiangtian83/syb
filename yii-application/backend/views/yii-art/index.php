<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\YiiCate;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\YiiArtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '文章管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-art-index">

    <?php Pjax::begin(); ?>

    <p class="pull-right">
        <?= Html::a(Yii::t('app', '添加文章'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号',
            ],

            'title',
            'description',
            [
                'attribute' => 'cateid',
                'label' => '所属栏目',
                'value' => function ($m) {
                    $cate = YiiCate::findOne(['id' => $m->cateid]);
                    return !empty($cate) ? $cate->catename : "";
                }
            ],
            'views',
            'creator',
            [
                'attribute' => 'created_at',
                'value' => function($m){
                    return date('Y-m-d H:i:s', $m->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function($m){
                    return date('Y-m-d H:i:s', $m->updated_at);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{update}{delete}',
                'options' => ['style' => 'width: 150px'],
                'buttons'=>[
                    'update'=> function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', '编辑'),
                            'aria-label' => Yii::t('app', '编辑'),
                            'data-pjax' => '0',
                            'class'=>'btn btn-success btn-sm',
                            'style'=>['margin-right' => '5px']
                        ];
                        return Html::a('编辑', $url, $options);
                    },
                    'delete'=> function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', '删除'),
                            'aria-label' => Yii::t('app', '删除'),
                            'data-pjax' => '0',
                            'data-confirm' => Yii::t('yii', '您确定要删除该栏目？'),
                            'class'=>'btn btn-danger btn-sm',
                        ];
                        return Html::a('删除', $url, $options);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
