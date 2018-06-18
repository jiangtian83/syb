<?php

namespace yiichina\chart;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * This is just an example.
 */
class Chart extends Widget
{
    public $type;

    public $data = [];

    public $options = [];

    public $clientOptions = [];

    public function init()
    {
        parent::init();

        if ($this->type === null) {
            throw new InvalidConfigException("The type option is required");
        }

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    public function run()
    {
        $view = $this->getView();
        ChartAsset::register($view);
        $config = Json::encode(['type' => $this->type, 'data' => $this->data, 'options' => $this->clientOptions]);
        $view->registerJs("var chart_{$this->options['id']} = new Chart($('#{$this->options['id']}'),$config);");
        echo Html::tag('canvas', '', $this->options);
    }
}
