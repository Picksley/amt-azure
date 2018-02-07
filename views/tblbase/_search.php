<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblbaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblbase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Vehicle_Type') ?>

    <?= $form->field($model, 'Manufacturer_Code') ?>

    <?= $form->field($model, 'Manufacturer_Name') ?>

    <?= $form->field($model, 'Manufacturer_National_Labour_Rate') ?>

    <?= $form->field($model, 'Manufacturer_CAP_Code_Look_Up') ?>

    <?php // echo $form->field($model, 'Range_Code') ?>

    <?php // echo $form->field($model, 'Range_Name') ?>

    <?php // echo $form->field($model, 'Model_Code') ?>

    <?php // echo $form->field($model, 'Model_Description') ?>

    <?php // echo $form->field($model, 'Model_Introduction_Year') ?>

    <?php // echo $form->field($model, 'Model_Discontinuation_Year') ?>

    <?php // echo $form->field($model, 'Model_Body_Style') ?>

    <?php // echo $form->field($model, 'Derivative_CAP_ID') ?>

    <?php // echo $form->field($model, 'Derivative_CAP_Code') ?>

    <?php // echo $form->field($model, 'Derivative_Trim') ?>

    <?php // echo $form->field($model, 'Derivative_Description') ?>

    <?php // echo $form->field($model, 'Derivative_Introduction_Date') ?>

    <?php // echo $form->field($model, 'Derivative_Discontinuation_Date') ?>

    <?php // echo $form->field($model, 'Derivative_Vehicle_Sector') ?>

    <?php // echo $form->field($model, 'Derivative_No_of_Doors') ?>

    <?php // echo $form->field($model, 'Derivative_Drivetrain') ?>

    <?php // echo $form->field($model, 'Derivative_Fuel_Delivery') ?>

    <?php // echo $form->field($model, 'Derivative_Transmission') ?>

    <?php // echo $form->field($model, 'Derivative_Fuel_Type') ?>

    <?php // echo $form->field($model, 'Derivative_Latest_Model_Year_YYYY') ?>

    <?php // echo $form->field($model, 'Derivative_Latest_Model_Year_Reference') ?>

    <?php // echo $form->field($model, 'Derivative_Latest_Basic_Price') ?>

    <?php // echo $form->field($model, 'Derivative_Latest_VAT') ?>

    <?php // echo $form->field($model, 'Derivative_Latest_Delivery_Cost') ?>

    <?php // echo $form->field($model, 'Friendly_URL_2') ?>

    <?php // echo $form->field($model, 'Friendly_URL_3') ?>

    <?php // echo $form->field($model, 'Friendly_URL_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
