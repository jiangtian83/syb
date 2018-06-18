<?php

namespace yiichina\auth\clients;

use yii\authclient\OAuth2;
use yiichina\auth\AuthChoiceAsset;
use Yii;

class Baidu extends OAuth2
{
    use AuthTrait;

    public $authUrl = 'http://openapi.baidu.com/oauth/2.0/authorize';

    public $tokenUrl = 'https://openapi.baidu.com/oauth/2.0/token';

    public $apiBaseUrl = 'https://openapi.baidu.com/rest/2.0';

    public function init()
    {
        $this->registerAsset();
        $this->registerTranslations();
    }

    protected function initUserAttributes()
    {
        return $this->api('passport/users/getInfo');
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'baidu';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return Yii::t('yiichina/auth', 'Baidu');
    }
}
