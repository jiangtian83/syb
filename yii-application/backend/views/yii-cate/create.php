<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiCate */

$this->title = Yii::t('app', '新建栏目');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-cate-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
