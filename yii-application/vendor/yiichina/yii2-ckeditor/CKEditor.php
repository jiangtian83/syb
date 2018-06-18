<?php

namespace yiichina\ckeditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class CKEditor extends \yii\widgets\InputWidget
{
    public function init()
    {
        parent::init();
        $view = $this->getView();
        CKEditorAsset::register($view);
		$view->registerJs("CKEDITOR.replace(\"{$this->options['id']}\")");
    }

    public function run()
    {
        if($this->hasModel()) {
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            return Html::textarea($this->name, $this->value, $this->options);
        }
    }
}
