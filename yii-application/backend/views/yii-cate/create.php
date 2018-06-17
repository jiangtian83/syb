<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiCate */

$this->title = Yii::t('app', 'Create Yii Cate');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii Cates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-cate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
