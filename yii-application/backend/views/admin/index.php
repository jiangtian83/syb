<?php
use yii\helpers\Html;
use backend\assets\AppAsset;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user" id="<?=Yii::$app->user->id?>">(<?=Yii::$app->user->identity->username?>)</span>   <span class="glyphicon glyphicon-envelope"></span>  <span class="badge" id="msgnum"><?php if(Yii::$app->session->has('msg')):?> <?=Yii::$app->session->get('msg')?><?else:?>0<?endif?></span>  <a href="<?=Yii::$app->urlManager->createUrl(['admin/logout'])?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>

</body>
</html>
<!--<div class="content">-->
<!--    <div class="dl-main-nav">-->
<!--        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>-->
<!--        <ul id="J_Nav"  class="nav-list ks-clear">-->
<!--            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->
<!--    <ul id="J_NavContent" class="dl-tab-conten">-->
<!---->
<!--    </ul>-->
<!--</div>-->
<!---->
<!---->
<!--<script>-->
<!--    var test="--><?//= Yii::$app->urlManager->createUrl('admin/users')?>//";
//    var thumb="<?//= Yii::$app->urlManager->createUrl('admin/thumb')?>//";
//    var sendmsg="<?//= Yii::$app->urlManager->createUrl('admin/sendmsg')?>//";
//    var msg="<?//= Yii::$app->urlManager->createUrl('admin/msg')?>//";
//    var mysend="<?//= Yii::$app->urlManager->createUrl('admin/mysend')?>//";
//
//    BUI.use('common/main',function(){
//        var config = [
//            {id:'1',menu:[
//                  {text:'系统管理',items:[{id:'11',text:'朋友圈',href:test},{id:'12',text:'头像管理',href:thumb}]},
//                  {text:'消息管理',items:[{id:'22',text:'我的消息',href:msg},{id:'23',text:'我发送的',href:mysend},{id:'24',text:'发送信息',href:sendmsg}]}
//                ]},
//            {id:'7',homePage : '9',menu:[{text:'业务管理',items:[{id:'9',text:'查询业务',href:test}]}]}
//        ];
//        new PageUtil.MainPage({
//            modulesConfig : config
//        });
//    });
//</script>
//</body>
//</html>