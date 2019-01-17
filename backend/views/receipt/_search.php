<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceiptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'receipt_id') ?>

    <?= $form->field($model, 'receipt_no') ?>

    <?= $form->field($model, 'receipt_date') ?>

    <?= $form->field($model, 'receipt_from') ?>

    <?= $form->field($model, 'receipt_type') ?>

    <?php // echo $form->field($model, 'receipt_sum') ?>

    <?php // echo $form->field($model, 'receipt_employee') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
