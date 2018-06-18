<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiArt */

$this->title = Yii::t('app', '添加文章');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-art-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
