<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\YiiCate;

/* @var $this yii\web\View */
/* @var $model backend\models\YiiCate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-cate-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal']
    ]); ?>

    <?= $form->field($model, 'catename', [
        'options' => ['style' => 'margin: 0; width: 300px']
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description', [
        'options' => ['style' => 'margin: 0; width: 300px']
        ])->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid', [
        'options' => ['style' => 'margin: 0; width: 300px']
    ])->dropDownList(YiiCate::findAll(['type' => 0]), [
            'options' => [
                'value' => 0
            ]
    ]) ?>

    <?= $form->field($model, 'type')->label(false)->hiddenInput(['value' => 0]) ?>

    <?= $form->field($model, 'views', [
        'options' => ['style' => 'margin: 0; width: 300px']
    ])->textInput(['value' => mt_rand(50, 500)]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->user]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', $model->isNewRecord ? '新建' : '编辑'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
