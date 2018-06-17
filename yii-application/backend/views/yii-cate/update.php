<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YiiCate */

$this->title = Yii::t('app', '编辑：' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => "##"];
?>
<div class="yii-cate-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
