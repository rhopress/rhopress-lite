<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license http://vistart.name/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Description of Html5shivAsset
 *
 * @author vistart <i@vistart.name>
 */
class Html5shivAsset extends AssetBundle
{
    public $sourcePath = '@bower/html5shiv/dist';
    public $js = [
        'html5shiv.js',
    ];
    public $jsOptions = [
        'condition' => 'lt IE 9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}
