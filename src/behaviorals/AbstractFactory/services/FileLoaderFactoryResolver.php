<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderFactoryInterface;
use RuntimeException;

class FileLoaderFactoryResolver
{
    public static function resolve(string $path): FileLoaderFactoryInterface
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);

        return match ($extension) {
            'json'  => new JsonLoaderFactory(),
            'xml'   => new XmlLoaderFactory(),
            'csv'   => new CsvLoaderFactory(),
            default => throw new RuntimeException("Unsupported file format: $extension"),
        };
    }
}