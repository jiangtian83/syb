<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiArt */

$this->title = Yii::t('app', 'Create Yii Art');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii Arts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-art-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
