<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receipt-form">

    <p>Your Receipt Number will be: BST<?php echo time();?></p>

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'receipt_employee')->textInput(['value' => Yii::$app->user->identity->username]) ->label('Operator:') ?>

    <?= $form->field($model, 'receipt_no')->textInput(['value' => 'BST'.time()])->label('Receipt Number:') ?>

    <?= $form->field($model, 'receipt_date')->textInput(['value' => date('Y/m/d'), 'readonly'])->label('Creating Date:') ?>

    <?= $form->field($model, 'receipt_from')->textInput(['maxlength' => true, 'value' => 'Customer'])->label('Customer\'s Name:') ?>

    <?= $form->field($model, 'receipt_type')->textInput(['maxlength' => true, 'value' => 'Cash'])->label('Cash or Card?') ?>

    <?= $form->field($model, 'receipt_sum')->textInput(['maxlength' => true])->label('How much money? For example 15.23') ?>
    
    <?= $form->field($model, 'receipt_comment')->textInput(['maxlength' => true])->label('Put your comments here:') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
