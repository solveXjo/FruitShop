<?php

use app\models\cart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\cartSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Carts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CartID',
            'UserID',
            'CreatedAt',
            'Status',
            'UpdatedAt',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, cart $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'CartID' => $model->CartID]);
                 }
            ],
        ],
    ]); ?>


</div>
