<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/6/18
 * Time: 下午6:50
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Alert;
use backend\models\YiiCate;

AppAsset::register($this);
$nav = YiiCate::findBySql('select id,catename from :tbname where type=0 or type=1;', [':tbname' => 'yii_cate'])->all();
var_dump($nav);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);</script>
</head>

<?php $this->beginBody() ?>
<body>
<!-- header -->
<div class="header" id="ban">
    <div class="container">
        <div class="w3ls_logo">
            <h1><a href="/">创业经纪人</a></h1>
        </div>
        <div class="header_right">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-7" id="link-effect-7">
                    <ul class="nav navbar-nav">
                        <li class="active act"><a href="index.html" data-hover="Home">Home</a></li>
                        <li><a href="about.html" data-hover="About">About</a></li>
                        <li><a href="portfolio.html" data-hover="Portfolio">Portfolio</a></li>
                        <li><a href="short-codes.html" data-hover="Short Codes">Short Codes</a></li>
                        <li><a href="mail.html" data-hover="Mail">Mail</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->

<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
        <h2>Subscribe to <span>Newsletter</span></h2>
        <form action="#" method="post">
            <input type="email" name="Email" value="Enter Your Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email...';}" required="">
            <input type="submit" value="Send">
        </form>
    </div>
</div>
<div class="footer-copy">
    <div class="container">
        <div class="w3agile_footer_grids">
            <div class="col-md-4 w3agile_footer_grid">
                <h3>About Us</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
            </div>
            <div class="col-md-4 w3agile_footer_grid">
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                <h3>Navigation</h3>
                <ul>
                    <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="about.html">About Us</a></li>
                    <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="portfolio.html">Portfolio</a></li>
                    <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="short-codes.html">Short Codes</a></li>
                    <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="mail.html">Mail Us</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copy-right-social">
    <div class="container">
        <div class="footer-pos">
            <a href="#ban" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
        </div>
        <div class="copy-right">
            <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
        </div>
        <div class="copy-right-social1">
            <div class="w3l_social_icons w3l_social_icons1">
                <ul>
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="google_plus"></a></li>
                    <li><a href="#" class="pinterest"></a></li>
                    <li><a href="#" class="instagram"></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<?php
$js = <<<JS
    <!-- start-smoth-scrolling -->
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
    });
    <!-- start-smoth-scrolling -->
JS;

$this->registerJs($js);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
