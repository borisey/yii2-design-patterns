<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces;

interface FileLoaderInterface
{
    public function load(string $path): array;
}