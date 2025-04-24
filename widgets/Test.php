<?php

namespace app\widgets;

use Yii;
use yii\helpers\Html;

class Test extends \yii\bootstrap5\Widget
{

    public $tag;
    public $options = [];

    public function init()
    {
        parent::init();

        echo Html::beginTag($this -> tag, $this -> options) . "\n";

    }

    public function run()
    {
        echo Html::endTag($this -> tag);
    }
}
