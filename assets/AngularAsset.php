<?php
namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'angular/angular.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}