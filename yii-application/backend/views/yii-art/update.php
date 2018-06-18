<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YiiArt */

$this->title = Yii::t('app', 'Update Yii Art: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => '##'];
?>
<div class="yii-art-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
