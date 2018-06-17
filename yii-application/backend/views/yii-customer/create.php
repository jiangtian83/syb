<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\YiiCustomer */

$this->title = Yii::t('app', 'Create Yii Customer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yii Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
