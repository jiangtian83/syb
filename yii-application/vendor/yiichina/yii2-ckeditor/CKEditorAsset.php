<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\ckeditor;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/ckeditor';

    public $js = [
        'ckeditor.js',
    ];

    public $depends = array(
        'yii\bootstrap\BootstrapAsset'
    );
}
