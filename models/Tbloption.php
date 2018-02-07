<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbloption".
 *
 * @property int $Derivative_CAP_ID
 * @property string $Derivative_CAP_Code
 * @property int $Derivative_Latest_Option_Period_Code
 * @property string $Derivative_Latest_Period_Date_From
 * @property string $Derivative_Latest_Period_Date_To
 * @property int $Derivative_Latest_Rule_Code
 * @property string $Derivative_Latest_Rule_Type
 * @property int $Derivative_Latest_Option_Code
 * @property bool $Derivative_Latest_Option_IS_Primary
 * @property int $Derivative_Option_Category_Code
 * @property string $Derivative_Option_Category_Description
 * @property string $Derivative_Option_Category_Type
 * @property string $Derivative_Option_CTH_Type
 * @property string $Derivative_Option_Description
 * @property int $Derivative_Option_Non_Specific_Cost_Option
 * @property string $Derivative_Option_Date_From
 * @property string $Derivative_Option_Date_To
 * @property string $Derivative_Option_Date_Last_Modified
 * @property string $Derivative_Option_Basic_Price
 * @property string $Derivative_Option_VAT
 * @property bool $Derivative_Option_POA
 * @property bool $Derivative_Option_Is_Default
 */
class Tbloption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbloption';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Derivative_CAP_ID', 'Derivative_Latest_Option_Period_Code', 'Derivative_Latest_Rule_Code', 'Derivative_Latest_Option_Code', 'Derivative_Option_Category_Code', 'Derivative_Option_Non_Specific_Cost_Option'], 'integer'],
            [['Derivative_Latest_Period_Date_From', 'Derivative_Latest_Period_Date_To', 'Derivative_Option_Date_From', 'Derivative_Option_Date_To', 'Derivative_Option_Date_Last_Modified'], 'safe'],
            [['Derivative_Latest_Period_Date_To', 'Derivative_Option_Date_To'], 'required'],
            [['Derivative_Latest_Option_IS_Primary', 'Derivative_Option_POA', 'Derivative_Option_Is_Default'], 'boolean'],
            [['Derivative_Option_Basic_Price', 'Derivative_Option_VAT'], 'number'],
            [['Derivative_CAP_Code', 'Derivative_Option_Category_Description', 'Derivative_Option_Description'], 'string', 'max' => 250],
            [['Derivative_Latest_Rule_Type'], 'string', 'max' => 2],
            [['Derivative_Option_Category_Type', 'Derivative_Option_CTH_Type'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Derivative_CAP_ID' => 'Derivative  Cap  ID',
            'Derivative_CAP_Code' => 'Derivative  Cap  Code',
            'Derivative_Latest_Option_Period_Code' => 'Derivative  Latest  Option  Period  Code',
            'Derivative_Latest_Period_Date_From' => 'Derivative  Latest  Period  Date  From',
            'Derivative_Latest_Period_Date_To' => 'Derivative  Latest  Period  Date  To',
            'Derivative_Latest_Rule_Code' => 'Derivative  Latest  Rule  Code',
            'Derivative_Latest_Rule_Type' => 'Derivative  Latest  Rule  Type',
            'Derivative_Latest_Option_Code' => 'Derivative  Latest  Option  Code',
            'Derivative_Latest_Option_IS_Primary' => 'Derivative  Latest  Option  Is  Primary',
            'Derivative_Option_Category_Code' => 'Derivative  Option  Category  Code',
            'Derivative_Option_Category_Description' => 'Derivative  Option  Category  Description',
            'Derivative_Option_Category_Type' => 'Derivative  Option  Category  Type',
            'Derivative_Option_CTH_Type' => 'Derivative  Option  Cth  Type',
            'Derivative_Option_Description' => 'Derivative  Option  Description',
            'Derivative_Option_Non_Specific_Cost_Option' => 'Derivative  Option  Non  Specific  Cost  Option',
            'Derivative_Option_Date_From' => 'Derivative  Option  Date  From',
            'Derivative_Option_Date_To' => 'Derivative  Option  Date  To',
            'Derivative_Option_Date_Last_Modified' => 'Derivative  Option  Date  Last  Modified',
            'Derivative_Option_Basic_Price' => 'Derivative  Option  Basic  Price',
            'Derivative_Option_VAT' => 'Derivative  Option  Vat',
            'Derivative_Option_POA' => 'Derivative  Option  Poa',
            'Derivative_Option_Is_Default' => 'Derivative  Option  Is  Default',
        ];
    }

    /**
     * @inheritdoc
     * @return TbloptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbloptionQuery(get_called_class());
    }
}
