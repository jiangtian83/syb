<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YiiCateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '栏目管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-cate-index">

    <?php Pjax::begin(); ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '新建栏目'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            'catename',
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
                'header' => '操作'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
