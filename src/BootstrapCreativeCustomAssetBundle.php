<?php

namespace effsoft\eff\theme\creative;

use effsoft\eff\EffAssetBundle;

class BootstrapCreativeCustomAssetBundle extends EffAssetBundle{

    public $sourcePath = '';

    public function init(){
        parent::init();
        $this->sourcePath = __DIR__.'/dist/custom';
    }

    public $css = [
        YII_ENV_DEV ? 'css/custom.css':'css/custom.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'js/custom.js':'js/custom.min.js',
    ];

    public $depends = [
        'effsoft\eff\theme\creative\BootstrapCreativeAssetBundle',
    ];

    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV ? true: false,
    ];

}