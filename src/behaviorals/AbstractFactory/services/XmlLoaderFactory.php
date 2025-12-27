<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderFactoryInterface;
use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderInterface;

class XmlLoaderFactory implements FileLoaderFactoryInterface
{
    public function createLoader(): FileLoaderInterface
    {
        return new XmlFileLoader();
    }
}