<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderInterface;

class XmlFileLoader implements FileLoaderInterface
{
    public function load(string $path): array
    {
        $content = file_get_contents($path);
        $xml = simplexml_load_string($content, "SimpleXMLElement", LIBXML_NOCDATA);

        return json_decode(json_encode($xml), true);
    }
}