<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/6/16
 * Time: 下午7:17
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace backend\extentions;

use yii;
use yii\web\Response;
use yii\captcha\CaptchaAction;

class JTCaptchaAction extends CaptchaAction
{
    public $autoRegenerate = true;

    public function run()
    {
        if ($this->autoRegenerate && Yii::$app->request->getQueryParam(self::REFRESH_GET_VAR) === null) {
            $this->setHttpHeaders();
            Yii::$app->response->format = Response::FORMAT_RAW;
            return $this->renderImage($this->getVerifyCode(true));
        }
        return parent::run();
    }
}