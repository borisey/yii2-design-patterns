<?php

namespace Borisey\Yii2DesignPatterns\controllers;

use yii\web\Controller;
use yii\helpers\Html;
use yii\helpers\Markdown;

class DefaultController extends Controller
{
    /**
     * /yii2-design-patterns/default/index/
     */
    public function actionIndex()
    {
        $readmePath = \Yii::getAlias('@vendor/borisey/yii2-design-patterns/README.md');

        if (!file_exists($readmePath)) {
            throw new \yii\web\NotFoundHttpException('README.md not found');
        }

        $content = file_get_contents($readmePath);

        // Парсим Markdown → HTML
        $html = Markdown::process($content, 'gfm');

        return $this->render('index', [
            'content' => $html,
        ]);
    }
}
