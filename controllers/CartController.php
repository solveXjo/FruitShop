<?php

namespace app\controllers;

use app\models\cart;
use app\models\cartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CartController implements the CRUD actions for cart model.
 */
class CartController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all cart models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new cartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single cart model.
     * @param int $CartID Cart ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CartID)
    {
        return $this->render('view', [
            'model' => $this->findModel($CartID),
        ]);
    }

    /**
     * Creates a new cart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new cart();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'CartID' => $model->CartID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing cart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $CartID Cart ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CartID)
    {
        $model = $this->findModel($CartID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CartID' => $model->CartID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing cart model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $CartID Cart ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CartID)
    {
        $this->findModel($CartID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the cart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $CartID Cart ID
     * @return cart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CartID)
    {
        if (($model = cart::findOne(['CartID' => $CartID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
