<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cartitem $model */

$this->title = 'Create Cartitem';
$this->params['breadcrumbs'][] = ['label' => 'Cartitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
