<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/6/16
 * Time: 下午1:16
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace backend\controllers;

use backend\models\YiiUser;
use yii;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        return YiiUser::find()->all();
    }
}