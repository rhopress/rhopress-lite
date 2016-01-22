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
 * Description of RespondAsset
 *
 * @author vistart <i@vistart.name>
 */
class RespondAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond/src';
    public $js = [
        'respond.js',
    ];
    public $jsOptions = [
        'condition' => 'lt IE 9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}
