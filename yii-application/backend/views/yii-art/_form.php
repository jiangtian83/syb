<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YiiArt */
/* @var $form yii\widgets\ActiveForm */

$cates = \backend\models\YiiCate::find()->where(['type' => 0])->select('id, catename')->all();
$cateArr = [];
foreach ($cates as $cate){
    $cateArr[$cate->id] = $cate -> catename;
}
?>

<div class="yii-art-form col-md-6 col-xs-8 col-lg-5 col-sm-12">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'offset' => 'col-sm-offset-4',
                'wrapper' => 'col-sm-9',
                'error' => '',
                'hint' => '',
            ],
        ],
        'layout' => 'horizontal'
    ]); ?>

    <?= $form->field($model, 'title', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description', [
        'options' => ['style' => 'margin: 0;']
    ])->textarea(['maxlength' => true, 'style' => 'height: 150px;']) ?>

    <?= $form->field($model, 'content', [
        'options' => ['style' => 'margin: 0;']
    ])->textarea(['maxlength' => true, 'style' => 'height: 150px;']) ?>

    <?= $form->field($model, 'cateid', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput($cateArr, [
        'options' => [
            'value' => 0
        ]
    ]) ?>

    <?= $form->field($model, 'views', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['value' => mt_rand(50, 500)]) ?>

    <?= $form->field($model, 'creator', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->user]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', $model->isNewRecord ? '新建' : '编辑'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-left: 145px']) ?>    </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="col-md-7 col-xs-4 col-lg-8"></div>
