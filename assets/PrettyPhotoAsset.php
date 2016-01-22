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
 * Description of PrettyPhotoAsset
 *
 * @author vistart <i@vistart.name>
 */
class PrettyPhotoAsset extends AssetBundle
{
    public $sourcePath = '@bower/pretty-photo';
    public $js = [
        'js/jquery.prettyPhoto.js',
    ];
    public $css = [
        'css/prettyPhoto.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
