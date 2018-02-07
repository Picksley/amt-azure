<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblderivative_base".
 *
 * @property string $Vehicle_Type
 * @property int $Manufacturer_Code
 * @property string $Manufacturer_Name
 * @property double $Manufacturer_National_Labour_Rate
 * @property string $Manufacturer_CAP_Code_Look_Up
 * @property int $Range_Code
 * @property string $Range_Name
 * @property int $Model_Code
 * @property string $Model_Description
 * @property int $Model_Introduction_Year
 * @property int $Model_Discontinuation_Year
 * @property string $Model_Body_Style
 * @property int $Derivative_CAP_ID
 * @property string $Derivative_CAP_Code
 * @property string $Derivative_Trim
 * @property string $Derivative_Description
 * @property string $Derivative_Introduction_Date
 * @property string $Derivative_Discontinuation_Date
 * @property string $Derivative_Vehicle_Sector
 * @property int $Derivative_No_of_Doors
 * @property string $Derivative_Drivetrain
 * @property string $Derivative_Fuel_Delivery
 * @property string $Derivative_Transmission
 * @property string $Derivative_Fuel_Type
 * @property string $Derivative_Latest_Model_Year_YYYY
 * @property int $Derivative_Latest_Model_Year_Reference
 * @property string $Derivative_Latest_Basic_Price
 * @property string $Derivative_Latest_VAT
 * @property string $Derivative_Latest_Delivery_Cost
 * @property string $Friendly_URL_2
 * @property string $Friendly_URL_3
 * @property string $Friendly_URL_4
 */
class TblderivativeBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblderivative_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Manufacturer_Code', 'Range_Code', 'Model_Code', 'Model_Introduction_Year', 'Model_Discontinuation_Year', 'Derivative_CAP_ID', 'Derivative_No_of_Doors', 'Derivative_Latest_Model_Year_Reference'], 'integer'],
            [['Manufacturer_National_Labour_Rate', 'Derivative_Latest_Basic_Price', 'Derivative_Latest_VAT', 'Derivative_Latest_Delivery_Cost'], 'number'],
            [['Derivative_Introduction_Date', 'Derivative_Discontinuation_Date'], 'safe'],
            [['Vehicle_Type'], 'string', 'max' => 20],
            [['Manufacturer_Name', 'Range_Name', 'Model_Description', 'Derivative_CAP_Code', 'Derivative_Trim', 'Derivative_Description', 'Derivative_Vehicle_Sector', 'Derivative_Drivetrain', 'Derivative_Fuel_Delivery', 'Derivative_Transmission', 'Derivative_Fuel_Type'], 'string', 'max' => 250],
            [['Manufacturer_CAP_Code_Look_Up'], 'string', 'max' => 2],
            [['Model_Body_Style'], 'string', 'max' => 100],
            [['Derivative_Latest_Model_Year_YYYY'], 'string', 'max' => 4],
            [['Friendly_URL_2', 'Friendly_URL_3', 'Friendly_URL_4'], 'string', 'max' => 2048],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Vehicle_Type' => 'Vehicle  Type',
            'Manufacturer_Code' => 'Manufacturer  Code',
            'Manufacturer_Name' => 'Manufacturer  Name',
            'Manufacturer_National_Labour_Rate' => 'Manufacturer  National  Labour  Rate',
            'Manufacturer_CAP_Code_Look_Up' => 'Manufacturer  Cap  Code  Look  Up',
            'Range_Code' => 'Range  Code',
            'Range_Name' => 'Range  Name',
            'Model_Code' => 'Model  Code',
            'Model_Description' => 'Model  Description',
            'Model_Introduction_Year' => 'Model  Introduction  Year',
            'Model_Discontinuation_Year' => 'Model  Discontinuation  Year',
            'Model_Body_Style' => 'Model  Body  Style',
            'Derivative_CAP_ID' => 'Derivative  Cap  ID',
            'Derivative_CAP_Code' => 'Derivative  Cap  Code',
            'Derivative_Trim' => 'Derivative  Trim',
            'Derivative_Description' => 'Derivative  Description',
            'Derivative_Introduction_Date' => 'Derivative  Introduction  Date',
            'Derivative_Discontinuation_Date' => 'Derivative  Discontinuation  Date',
            'Derivative_Vehicle_Sector' => 'Derivative  Vehicle  Sector',
            'Derivative_No_of_Doors' => 'Derivative  No Of  Doors',
            'Derivative_Drivetrain' => 'Derivative  Drivetrain',
            'Derivative_Fuel_Delivery' => 'Derivative  Fuel  Delivery',
            'Derivative_Transmission' => 'Derivative  Transmission',
            'Derivative_Fuel_Type' => 'Derivative  Fuel  Type',
            'Derivative_Latest_Model_Year_YYYY' => 'Derivative  Latest  Model  Year  Yyyy',
            'Derivative_Latest_Model_Year_Reference' => 'Derivative  Latest  Model  Year  Reference',
            'Derivative_Latest_Basic_Price' => 'Derivative  Latest  Basic  Price',
            'Derivative_Latest_VAT' => 'Derivative  Latest  Vat',
            'Derivative_Latest_Delivery_Cost' => 'Derivative  Latest  Delivery  Cost',
            'Friendly_URL_2' => 'Friendly  Url 2',
            'Friendly_URL_3' => 'Friendly  Url 3',
            'Friendly_URL_4' => 'Friendly  Url 4',
        ];
    }

    /**
     * @inheritdoc
     * @return TblderivativeBaseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblderivativeBaseQuery(get_called_class());
    }
}
