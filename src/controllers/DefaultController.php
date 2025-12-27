<?php

namespace Borisey\Yii2DesignPatterns\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    /**
     * http://localhost:8000/patterns/default/index/
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
