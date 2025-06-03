<?php

namespace app\modules;

use Yii;
use yii\helpers\Url;

/**
 * modules module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        // Yii::$app->response->redirect(Url::home());
        // Yii::$app->response->send();
        // exit;

        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->role != 'admin') {
        //     Yii::$app->response->redirect(Url::home());
        //     exit;
        // }
    }
}
