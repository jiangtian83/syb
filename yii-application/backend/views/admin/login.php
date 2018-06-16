<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?=Html::cssFile('@web/css/bootstrap.css')?>

</head>
<body>
<style>
    body{background: #009A61}
    .login{background: #fff;padding: 3em;margin-top: 10em;border-radius: 0.5em;}
    label{display: none;}
    .mr20{margin-right:20px;}
    h3{font-family: "microsoft yahei", "黑体"}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 sm col-sm-1"></div>
        <div class="col-md-4 sm col-sm-1 login">
            <h3><p><span class='glyphicon glyphicon-user'></span>&nbsp;欢迎使用用户中心</p></h3>
            <?php $form=ActiveForm::begin([
                'id'=>'login',
                'action' => '',
                'enableAjaxValidation' => false,
                'options'=>['enctype'=>'multipart/form-data']
            ]);?>

            <?=$form->field($model,'user')->textInput(["placeholder"=>"账号"]); ?>
            <?=$form->field($model,'pwd')->passwordInput(['placeholder'=>'密码']); ?>
            <?=$form->field($model,'verifyCode')->widget(Captcha::className(),['captchaAction'=>Yii::$app->urlManager->createUrl('admin/captcha'),
                'imageOptions' => ['style' => 'cursor:pointer;width: 100%;height: 30px;','alt'=>'点击换图','title'=>'点击换图', 'id' => 'imgVerifyCode'],
                'template'=>'<div class="row"><div class="col-md-8 col-xs-6">{input}</div><div class="col-md-4 col-xs-6 col-md-offset-2" onclick="changeVerifyCode();">{image}</div></div>'
            ])?>
            <?=  Html::submitButton('登录', ['class'=>'btn btn-primary btn-lg btn-block','name' =>'submit-button']) ?>
            <?php ActiveForm::end();?>
        </div>
        <div class="col-md-4 sm col-sm-1"></div>
    </div>
</div>
<script src="/assets/js/jquery-1.8.1.min.js"></script>
<script>
    //更改或者重新加载验证码
    function changeVerifyCode() {
        $.ajax({
            url: "/admin/captcha?refresh",
            dataType: 'json',
            cache: false,
            success: function(data) {
                $('#imgVerifyCode').attr('src', data['url']);
            }
        });
    }
</script>
</body>
</html>

