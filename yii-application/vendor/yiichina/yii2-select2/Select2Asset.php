<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\select2;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Select2Asset extends AssetBundle
{
    public $sourcePath = '@bower/select2/dist';

    public $css = [
        'css/select2.min.css',
    ];

    public $js = [
        'js/select2.min.js',
    ];

    public $depends = array(
        'yii\web\YiiAsset',
    );
}
