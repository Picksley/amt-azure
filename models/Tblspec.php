<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblspec".
 *
 * @property int $Derivative_CAP_ID
 * @property string $Derivative_CAP_Code
 * @property int $Technical_Category_Code
 * @property string $Technical_Category_Description
 * @property string $Technical_Category_Type
 * @property int $Technical_Data_Code
 * @property int $Technical_Manufacturer_Code
 * @property string $Technical_Short_Description
 * @property string $Technical_Long_Description
 * @property string $Technical_Date_From
 * @property string $Technical_Date_To
 * @property string $Technical_Value
 */
class Tblspec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblspec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Derivative_CAP_ID', 'Technical_Category_Code', 'Technical_Data_Code', 'Technical_Manufacturer_Code'], 'integer'],
            [['Technical_Date_From', 'Technical_Date_To'], 'safe'],
            [['Technical_Date_To'], 'required'],
            [['Derivative_CAP_Code', 'Technical_Category_Description', 'Technical_Short_Description', 'Technical_Long_Description', 'Technical_Value'], 'string', 'max' => 250],
            [['Technical_Category_Type'], 'string', 'max' => 1],
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
            'Technical_Category_Code' => 'Technical  Category  Code',
            'Technical_Category_Description' => 'Technical  Category  Description',
            'Technical_Category_Type' => 'Technical  Category  Type',
            'Technical_Data_Code' => 'Technical  Data  Code',
            'Technical_Manufacturer_Code' => 'Technical  Manufacturer  Code',
            'Technical_Short_Description' => 'Technical  Short  Description',
            'Technical_Long_Description' => 'Technical  Long  Description',
            'Technical_Date_From' => 'Technical  Date  From',
            'Technical_Date_To' => 'Technical  Date  To',
            'Technical_Value' => 'Technical  Value',
        ];
    }

    /**
     * @inheritdoc
     * @return TblspecQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblspecQuery(get_called_class());
    }
}
