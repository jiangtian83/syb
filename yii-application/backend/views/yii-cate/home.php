<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YiiCateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '单页管理');

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-cate-index">

    <?php Pjax::begin(); ?>
    <p class="pull-right">
        <?= Html::a(Yii::t('app', '新建单页'), ['page'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="clearfix"></div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['style' => 'text-align: center', 'class' => 'table table-striped table-bordered'],
        'captionOptions' => ['style' => 'text-align: center'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号',
            ],

            [
                'attribute' => 'catename',
                'label' => '单页名称'
            ],
            'description',
            'views',
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
                'template' => '{edit}{del}',
                'options' => ['style' => 'width: 150px'],
                'buttons'=>[
                    'edit'=> function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', '编辑'),
                            'aria-label' => Yii::t('app', '编辑'),
                            'data-pjax' => '0',
                            'class'=>'btn btn-success btn-sm',
                            'style'=>['margin-right' => '5px']
                        ];
                        return Html::a('编辑', $url, $options);
                    },
                    'del'=> function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', '删除'),
                            'aria-label' => Yii::t('app', '删除'),
                            'data-pjax' => '0',
                            'data-confirm' => Yii::t('yii', '您确定要删除该单页？'),
                            'class'=>'btn btn-danger btn-sm',
                        ];
                        return Html::a('删除', $url, $options);
                    },
                ],
            ],
        ],
        'summary'=>false,
        'pager'=>[
            'firstPageLabel'=>'首页',
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'lastPageLabel'=>'尾页'
        ],
        'emptyText'=>"暂未添加单页",
        'layout'=> "{items}\n{pager}",
    ]); ?>
    <?php Pjax::end(); ?>
</div>
