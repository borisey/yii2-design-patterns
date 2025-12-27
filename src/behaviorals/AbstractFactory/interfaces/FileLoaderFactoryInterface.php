<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces;

interface FileLoaderFactoryInterface
{
    public function createLoader(): FileLoaderInterface;
}