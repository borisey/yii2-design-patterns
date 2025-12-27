<?php

namespace Borisey\Yii2DesignPatterns\forms;

use yii\base\Model;

class UploadForm extends Model
{
    public $file;

    public function rules(): array
    {
        return [
            [['file'], 'file', 'extensions' => ['json', 'xml', 'csv'], 'checkExtensionByMimeType' => false],
        ];
    }
}