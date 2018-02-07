<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblbaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblbases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblbase-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tblbase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Vehicle_Type',
            'Manufacturer_Code',
            'Manufacturer_Name',
            'Manufacturer_National_Labour_Rate',
            'Manufacturer_CAP_Code_Look_Up',
            //'Range_Code',
            //'Range_Name',
            //'Model_Code',
            //'Model_Description',
            //'Model_Introduction_Year',
            //'Model_Discontinuation_Year',
            //'Model_Body_Style',
            //'Derivative_CAP_ID',
            //'Derivative_CAP_Code',
            //'Derivative_Trim',
            //'Derivative_Description',
            //'Derivative_Introduction_Date',
            //'Derivative_Discontinuation_Date',
            //'Derivative_Vehicle_Sector',
            //'Derivative_No_of_Doors',
            //'Derivative_Drivetrain',
            //'Derivative_Fuel_Delivery',
            //'Derivative_Transmission',
            //'Derivative_Fuel_Type',
            //'Derivative_Latest_Model_Year_YYYY',
            //'Derivative_Latest_Model_Year_Reference',
            //'Derivative_Latest_Basic_Price',
            //'Derivative_Latest_VAT',
            //'Derivative_Latest_Delivery_Cost',
            //'Friendly_URL_2:url',
            //'Friendly_URL_3:url',
            //'Friendly_URL_4:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
