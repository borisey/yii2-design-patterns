<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderInterface;

class JsonFileLoader implements FileLoaderInterface
{
    public function load(string $path): array
    {
        $content = file_get_contents($path);
        return json_decode($content, true);
    }
}