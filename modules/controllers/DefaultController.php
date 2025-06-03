<?php

namespace app\modules\controllers;

use Yii;
use yii\web\Controller;
use app\modules\models\Admin;
use app\models\Products;

/**
 * Default controller for the `modules` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */


    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return !Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin';
                        },
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $products = Products::find()->indexBy('name')->all();
        $data = [
            'userCount' => Admin::getUserCount(),
            // 'soldProductCount' => Admin::getSoldProductCount(),
            // 'profit' => Admin::getProfit(),
            'outOfStockCount' => Admin::getOutOfStockProductCount(),
            'lowStockCount' => Admin::getLowStockProductCount(10),
            'numberOfCarts' => Admin::getNumberOfCarts(),
            // 'profitByproduct'  => Admin::profitByproduct(),
            'totalProfit' => Admin::getTotalProfit(),
            'profitByProduct' => Admin::profitByProduct(),
            'products' => $products,
            // 'topProducts' => Admin::getTopProducts(),
        ];
        return $this->render('index', ['data' => $data]);
    }

    public function actionUser()
    {
        return $this->render('user');
    }
}
