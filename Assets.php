<?php
namespace mihaildev\ckeditor;

use yii\web\AssetBundle;

class Assets extends AssetBundle{
	public $sourcePath = '@mihaildev/ckeditor/editor';

    public $js = [
        'ckeditor.js',
	'js.js',
    ];

    public $depends = [
	'yii\web\YiiAsset',
    ];
}