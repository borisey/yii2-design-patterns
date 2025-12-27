<?php

namespace Borisey\Yii2DesignPatterns\controllers;

class DefaultController
{
    /**
     * http://localhost:8000/patterns/default/index
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
