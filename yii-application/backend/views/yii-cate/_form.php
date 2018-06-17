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

    <?= $form->field($model, 'catename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->dropDownList(YiiCate::findAll(['type' => 0])) ?>

    <?= $form->field($model, 'deep')->textInput() ?>

    <?= $form->field($model, 'type')->label(false)->hiddenInput(['value' => 0]) ?>

    <?= $form->field($model, 'views')->textInput(['value' => mt_rand(50, 500)]) ?>

    <?= $form->field($model, 'creator')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->nickname]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '新建'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
