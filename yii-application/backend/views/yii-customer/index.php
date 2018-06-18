<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\YiiCate;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YiiCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '客户管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-customer-index">

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['style' => 'text-align: center', 'class' => 'table table-striped table-bordered'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号',
            ],

            'name',
            'tel',
            'addr',
            [
                'attribute' => 'reservationsid',
                'label' => '预约项目',
                'value' => function ($m) {
                    $model = YiiCate::findOne(['id' => $m->reservationsid]);
                    return !empty($model) ? $model->catename : "";
                }
            ],
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
                'template' => '{delete}',
                'options' => ['style' => 'width: 80px'],
                'buttons'=>[
                    'delete'=> function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('app', '删除'),
                            'aria-label' => Yii::t('app', '删除'),
                            'data-pjax' => '0',
                            'data-confirm' => Yii::t('yii', '您确定要删除该客户记录？'),
                            'class'=>'btn btn-danger btn-sm',
                        ];
                        return Html::a('删除', $url, $options);
                    },
                ],
            ]
        ],

        'summary'=>false,
        'pager'=>[
            'firstPageLabel'=>'首页',
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'lastPageLabel'=>'尾页'
        ],
        'emptyText'=>"暂无客户预约",
        'layout'=> "{items}\n{pager}",
    ]); ?>
    <?php Pjax::end(); ?>
</div>
