<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblderivative_standard_equipment_item_base".
 *
 * @property int $Derivative_CAP_ID
 * @property string $Derivative_CAP_Code
 * @property int $Derivative_Standard_Equipment_Code
 * @property int $Derivative_Standard_Equipment_Category_Code
 * @property string $Derivative_Standard_Equipment_Category_Description
 * @property string $Derivative_Standard_Equipment_Category_Type
 * @property string $Derivative_Standard_Equipment_CTH_Type
 * @property string $Derivative_Standard_Equipment_Description
 * @property int $Derivative_Standard_Equipment_Non_Specific_Cost_Option
 * @property string $Derivative_Standard_Equipment_Date_From
 * @property string $Derivative_Standard_Equipment_Date_To
 * @property string $Derivative_Standard_Equipment_Date_Last_Modified
 */
class TblderivativeStandardEquipmentItemBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblderivative_standard_equipment_item_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Derivative_CAP_ID', 'Derivative_Standard_Equipment_Code', 'Derivative_Standard_Equipment_Category_Code', 'Derivative_Standard_Equipment_Non_Specific_Cost_Option'], 'integer'],
            [['Derivative_Standard_Equipment_Date_From', 'Derivative_Standard_Equipment_Date_To', 'Derivative_Standard_Equipment_Date_Last_Modified'], 'safe'],
            [['Derivative_Standard_Equipment_Date_To'], 'required'],
            [['Derivative_CAP_Code', 'Derivative_Standard_Equipment_Category_Description', 'Derivative_Standard_Equipment_Description'], 'string', 'max' => 250],
            [['Derivative_Standard_Equipment_Category_Type', 'Derivative_Standard_Equipment_CTH_Type'], 'string', 'max' => 1],
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
            'Derivative_Standard_Equipment_Code' => 'Derivative  Standard  Equipment  Code',
            'Derivative_Standard_Equipment_Category_Code' => 'Derivative  Standard  Equipment  Category  Code',
            'Derivative_Standard_Equipment_Category_Description' => 'Derivative  Standard  Equipment  Category  Description',
            'Derivative_Standard_Equipment_Category_Type' => 'Derivative  Standard  Equipment  Category  Type',
            'Derivative_Standard_Equipment_CTH_Type' => 'Derivative  Standard  Equipment  Cth  Type',
            'Derivative_Standard_Equipment_Description' => 'Derivative  Standard  Equipment  Description',
            'Derivative_Standard_Equipment_Non_Specific_Cost_Option' => 'Derivative  Standard  Equipment  Non  Specific  Cost  Option',
            'Derivative_Standard_Equipment_Date_From' => 'Derivative  Standard  Equipment  Date  From',
            'Derivative_Standard_Equipment_Date_To' => 'Derivative  Standard  Equipment  Date  To',
            'Derivative_Standard_Equipment_Date_Last_Modified' => 'Derivative  Standard  Equipment  Date  Last  Modified',
        ];
    }

    /**
     * @inheritdoc
     * @return TblderivativeStandardEquipmentItemBaseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblderivativeStandardEquipmentItemBaseQuery(get_called_class());
    }
}
