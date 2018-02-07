<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblbase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblbase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vehicle_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Manufacturer_Code')->textInput() ?>

    <?= $form->field($model, 'Manufacturer_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Manufacturer_National_Labour_Rate')->textInput() ?>

    <?= $form->field($model, 'Manufacturer_CAP_Code_Look_Up')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Range_Code')->textInput() ?>

    <?= $form->field($model, 'Range_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model_Code')->textInput() ?>

    <?= $form->field($model, 'Model_Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model_Introduction_Year')->textInput() ?>

    <?= $form->field($model, 'Model_Discontinuation_Year')->textInput() ?>

    <?= $form->field($model, 'Model_Body_Style')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_CAP_ID')->textInput() ?>

    <?= $form->field($model, 'Derivative_CAP_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Trim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Introduction_Date')->textInput() ?>

    <?= $form->field($model, 'Derivative_Discontinuation_Date')->textInput() ?>

    <?= $form->field($model, 'Derivative_Vehicle_Sector')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_No_of_Doors')->textInput() ?>

    <?= $form->field($model, 'Derivative_Drivetrain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Fuel_Delivery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Transmission')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Fuel_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Latest_Model_Year_YYYY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Latest_Model_Year_Reference')->textInput() ?>

    <?= $form->field($model, 'Derivative_Latest_Basic_Price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Latest_VAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Derivative_Latest_Delivery_Cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Friendly_URL_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Friendly_URL_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Friendly_URL_4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
