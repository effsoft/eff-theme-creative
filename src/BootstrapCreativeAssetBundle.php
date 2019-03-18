<?php

namespace effsoft\eff\theme\creative;

use effsoft\eff\EffAssetBundle;

class BootstrapCreativeAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/startbootstrap-creative';

    public function init(){
        parent::init();

    }

    public $css = [
        YII_ENV_DEV ? 'css/creative.css':'css/creative.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'js/creative.js':'js/creative.min.js',
    ];

    public $depends = [
        'effsoft\eff\asset\jquery\JqueryAssetBundle',
        'effsoft\eff\asset\bootstrap\bundle\BootstrapBundleAssetBundle',
        'effsoft\eff\asset\magnific\popup\MagnificPopupAssetBundle',
        'effsoft\eff\asset\jquery\easing\JqueryEasingAssetBundle',
    ];

    public $publishOptions = [
//        'only' => [
//            'css/*',
//            'js/*',
//            'img/*',
////            'img/portfolio/*',
////            'img/portfolio/fullsize/*',
////            'img/portfolio/thumbnails/*',
//        ],
        'except' => [
            'vendor'
        ],
    ];

}