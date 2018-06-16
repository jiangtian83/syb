<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/6/16
 * Time: 下午6:06
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace backend\extentds;

use yii;

class JTYii extends yii\BaseYii
{
    /**
     * Returns an HTML hyperlink that can be displayed on your Web page showing "Powered by Yii Framework" information.
     * @return string an HTML hyperlink that can be displayed on your Web page showing "Powered by Yii Framework" information
     * @deprecated since 2.0.14, this method will be removed in 2.1.0.
     */
    public static function powered()
    {
        return \Yii::t('JT', '版权为 {yii} 所有 {developer}', [
            'yii' => '<a href="#" rel="external">' . \Yii::t('JT',
                    '创业经纪人') . '</a>',
            'developer' => \Yii::t('JT', '开发者：江天')
        ]);
    }
}