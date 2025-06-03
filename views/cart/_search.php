<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\cartSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CartID') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'CreatedAt') ?>

    <?= $form->field($model, 'Status') ?>

    <?= $form->field($model, 'UpdatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
