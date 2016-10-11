<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CommonAsset extends AssetBundle
{
    public $sourcePath = '@common/assets';
   // public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];

}
