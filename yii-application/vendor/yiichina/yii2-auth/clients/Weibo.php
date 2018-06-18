<?php

namespace yiichina\auth\clients;

use yii\authclient\OAuth2;
use yiichina\auth\AuthChoiceAsset;
use Yii;

class Weibo extends OAuth2
{
    use AuthTrait;

    public $authUrl = 'https://api.weibo.com/oauth2/authorize';

    public $tokenUrl = 'https://api.weibo.com/oauth2/access_token';

    public $apiBaseUrl = 'https://api.weibo.com/2';

	public function init()
	{
        $this->registerAsset();
        $this->registerTranslations();
	}

    protected function initUserAttributes()
    {
        return $this->api('users/show.json', 'GET', ['uid' => $this->user->uid]);
    }

    /**
     * @inheritdoc
     */
    protected function getUser()
    {
        $str = file_get_contents('https://api.weibo.com/2/account/get_uid.json?access_token=' . $this->accessToken->token);
        return json_decode($str);
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'weibo';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return Yii::t('yiichina/auth', 'Weibo');
    }
}
