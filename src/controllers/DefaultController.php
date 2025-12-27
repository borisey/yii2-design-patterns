<?php

namespace Borisey\Yii2DesignPatterns\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    /**
     * /yii2-design-patterns/default/index/
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
