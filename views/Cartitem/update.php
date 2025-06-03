<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cartitem $model */

$this->title = 'Update Cartitem: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cartitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cartitem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
