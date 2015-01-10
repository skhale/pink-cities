<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?> - <?= Yii::$app->name; ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<a id="skipnav" href="#content">skip to content</a>

<nav id="site-nav" class="site-nav navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?= $bundle->baseUrl; ?>/images/layout/logo.gif" alt="pink"></a>
        </div>
        
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="row hidden-xs">
                    <div class="tagline"><span class="city-name">boston:</span> paint the town pink!</div>
                </div>
                <div class="row">
                    <div id="site-nav-collapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav nav">
                        <li class="active"><a href="/site/index">Join</a></li>
                        <li class="active"><a href="/site/index">Sign In</a></li>
                        <li class="active"><a href="/site/index">Events</a></li>
                        <li class="active"><a href="/site/index">Pinkies</a></li>
                        <li class="active"><a href="/site/index">FAQs</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <form action="placeholder">
                    <fieldset>
                        <input class="input-text" type="text" />
                        <input class="submit" type="image" src="<?= $bundle->baseUrl; ?>/images/buttons/search.gif" />
                    </fieldset>
                </form>
            </div>
        
    </div>
</nav>

<div id="content" class="clearfix">
    <?= $content; ?>
</div>

<footer class="footer">
    <div class="container">
        <div id="copyright">Copyright 2007 - Pink Cities, LLC.</div>
        <ul id="footer-nav">
            <li><a href="contactUs.html">Contact Us</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="press.html">Press</a></li>
        </ul>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>