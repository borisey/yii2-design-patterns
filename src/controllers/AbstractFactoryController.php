<?php

namespace Borisey\Yii2DesignPatterns\controllers;

use Borisey\Yii2DesignPatterns\behaviorals\AbstractFactory\services\FileLoaderFactoryResolver;
use Borisey\Yii2DesignPatterns\forms\UploadForm;
use yii\web\{Controller, UploadedFile};
use Yii;

class AbstractFactoryController extends Controller
{
    /**
     * /yii2-design-patterns/abstract-factory/index/
     */
    public function actionIndex()
    {
        $model = new UploadForm();
        $data  = null;
        $error = null;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                try {
                    $path = Yii::getAlias('@runtime') . '/' . $model->file->name;
                    $model->file->saveAs($path);

                    $factory = FileLoaderFactoryResolver::resolve($model->file->name);
                    $loader  = $factory->createLoader();

                    $data = $loader->load($path);
                } catch (\Throwable $e) {
                    $error = $e->getMessage();
                }
            }
        }

        return $this->render('index', compact('model', 'data', 'error'));
    }
}
