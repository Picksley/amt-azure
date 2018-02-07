<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblbase */

$this->title = $model->Derivative_CAP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tblbases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblbase-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Derivative_CAP_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Derivative_CAP_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Vehicle_Type',
            'Manufacturer_Code',
            'Manufacturer_Name',
            'Manufacturer_National_Labour_Rate',
            'Manufacturer_CAP_Code_Look_Up',
            'Range_Code',
            'Range_Name',
            'Model_Code',
            'Model_Description',
            'Model_Introduction_Year',
            'Model_Discontinuation_Year',
            'Model_Body_Style',
            'Derivative_CAP_ID',
            'Derivative_CAP_Code',
            'Derivative_Trim',
            'Derivative_Description',
            'Derivative_Introduction_Date',
            'Derivative_Discontinuation_Date',
            'Derivative_Vehicle_Sector',
            'Derivative_No_of_Doors',
            'Derivative_Drivetrain',
            'Derivative_Fuel_Delivery',
            'Derivative_Transmission',
            'Derivative_Fuel_Type',
            'Derivative_Latest_Model_Year_YYYY',
            'Derivative_Latest_Model_Year_Reference',
            'Derivative_Latest_Basic_Price',
            'Derivative_Latest_VAT',
            'Derivative_Latest_Delivery_Cost',
            'Friendly_URL_2:url',
            'Friendly_URL_4:url',
        ],
    ]) ?>

</div>
