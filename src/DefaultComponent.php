<?php
namespace Borisey\Yii2DesignPatterns;

use yii\base\Component;

class DefaultComponent extends Component
{
    public $message = "Hello!";

    public function sayHello()
    {
        return $this->message;
    }
}