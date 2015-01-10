<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/legacy.css',
		'css/site.css'
	];
	public $js = [];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'app\assets\FontAwesomeAsset'
	];
}