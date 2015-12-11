<?php

namespace starcode\yii\circliful;

use yii\base\Widget;
use yii\helpers\Html;

class Circliful extends Widget
{
    public $tag = 'div';

    public $clientOptions = [];

    public $options = [];

    public function init()
    {
        parent::init();
        $this->options['id'] = $this->id;
        $this->options['data'] = $this->clientOptions;
    }

    public function run()
    {
        CirclifulAsset::register($this->view);
        $this->view->registerJs('$("#' . $this->id . '").circliful();');
        return Html::tag($this->tag, '', $this->options);
    }
}