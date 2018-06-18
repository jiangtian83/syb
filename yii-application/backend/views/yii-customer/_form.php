<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use backend\models\YiiCate;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiCustomer */
/* @var $form yii\widgets\ActiveForm */
$cates = YiiCate::find()->where(['type' => 1])->select('id, catename')->all();
$cateArr = [];
foreach ($cates as $cate){
    $cateArr[$cate->id] = $cate -> catename;
}
?>

<div class="yii-customer-form">

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

    <?= $form->field($model, 'name', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr', [
        'options' => ['style' => 'margin: 0;']
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reservationsid', [
        'options' => ['style' => 'margin: 0;']
    ])->dropDownList($cateArr, [
        'options' => [
            'value' => 0
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', $model->isNewRecord ? '新建' : '编辑'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-left: 145px']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
