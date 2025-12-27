<?php

namespace Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\interfaces\FileLoaderInterface;

class CsvFileLoader implements FileLoaderInterface
{
    public function load(string $path): array
    {
        if (!is_readable($path)) {
            throw new \RuntimeException("File not readable: {$path}");
        }

        $handle = fopen($path, 'r');
        if ($handle === false) {
            throw new \RuntimeException("Unable to open file: {$path}");
        }

        $data = [];
        $headers = null;

        while (($row = fgetcsv($handle, 0, ',')) !== false) {
            if ($headers === null) {
                $headers = $row;
                continue;
            }

            $data[] = array_combine($headers, $row);
        }

        fclose($handle);

        return $data;
    }
}