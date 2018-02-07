<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblbase;

/**
 * TblbaseSearch represents the model behind the search form of `app\models\Tblbase`.
 */
class TblbaseSearch extends Tblbase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vehicle_Type', 'Manufacturer_Name', 'Manufacturer_CAP_Code_Look_Up', 'Range_Name', 'Model_Description', 'Model_Body_Style', 'Derivative_CAP_Code', 'Derivative_Trim', 'Derivative_Description', 'Derivative_Introduction_Date', 'Derivative_Discontinuation_Date', 'Derivative_Vehicle_Sector', 'Derivative_Drivetrain', 'Derivative_Fuel_Delivery', 'Derivative_Transmission', 'Derivative_Fuel_Type', 'Derivative_Latest_Model_Year_YYYY', 'Friendly_URL_2', 'Friendly_URL_3', 'Friendly_URL_4'], 'safe'],
            [['Manufacturer_Code', 'Range_Code', 'Model_Code', 'Model_Introduction_Year', 'Model_Discontinuation_Year', 'Derivative_CAP_ID', 'Derivative_No_of_Doors', 'Derivative_Latest_Model_Year_Reference'], 'integer'],
            [['Manufacturer_National_Labour_Rate', 'Derivative_Latest_Basic_Price', 'Derivative_Latest_VAT', 'Derivative_Latest_Delivery_Cost'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tblbase::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Manufacturer_Code' => $this->Manufacturer_Code,
            'Manufacturer_National_Labour_Rate' => $this->Manufacturer_National_Labour_Rate,
            'Range_Code' => $this->Range_Code,
            'Model_Code' => $this->Model_Code,
            'Model_Introduction_Year' => $this->Model_Introduction_Year,
            'Model_Discontinuation_Year' => $this->Model_Discontinuation_Year,
            'Derivative_CAP_ID' => $this->Derivative_CAP_ID,
            'Derivative_Introduction_Date' => $this->Derivative_Introduction_Date,
            'Derivative_Discontinuation_Date' => $this->Derivative_Discontinuation_Date,
            'Derivative_No_of_Doors' => $this->Derivative_No_of_Doors,
            'Derivative_Latest_Model_Year_Reference' => $this->Derivative_Latest_Model_Year_Reference,
            'Derivative_Latest_Basic_Price' => $this->Derivative_Latest_Basic_Price,
            'Derivative_Latest_VAT' => $this->Derivative_Latest_VAT,
            'Derivative_Latest_Delivery_Cost' => $this->Derivative_Latest_Delivery_Cost,
        ]);

        $query->andFilterWhere(['like', 'Vehicle_Type', $this->Vehicle_Type])
            ->andFilterWhere(['like', 'Manufacturer_Name', $this->Manufacturer_Name])
            ->andFilterWhere(['like', 'Manufacturer_CAP_Code_Look_Up', $this->Manufacturer_CAP_Code_Look_Up])
            ->andFilterWhere(['like', 'Range_Name', $this->Range_Name])
            ->andFilterWhere(['like', 'Model_Description', $this->Model_Description])
            ->andFilterWhere(['like', 'Model_Body_Style', $this->Model_Body_Style])
            ->andFilterWhere(['like', 'Derivative_CAP_Code', $this->Derivative_CAP_Code])
            ->andFilterWhere(['like', 'Derivative_Trim', $this->Derivative_Trim])
            ->andFilterWhere(['like', 'Derivative_Description', $this->Derivative_Description])
            ->andFilterWhere(['like', 'Derivative_Vehicle_Sector', $this->Derivative_Vehicle_Sector])
            ->andFilterWhere(['like', 'Derivative_Drivetrain', $this->Derivative_Drivetrain])
            ->andFilterWhere(['like', 'Derivative_Fuel_Delivery', $this->Derivative_Fuel_Delivery])
            ->andFilterWhere(['like', 'Derivative_Transmission', $this->Derivative_Transmission])
            ->andFilterWhere(['like', 'Derivative_Fuel_Type', $this->Derivative_Fuel_Type])
            ->andFilterWhere(['like', 'Derivative_Latest_Model_Year_YYYY', $this->Derivative_Latest_Model_Year_YYYY])
            ->andFilterWhere(['like', 'Friendly_URL_2', $this->Friendly_URL_2])
            ->andFilterWhere(['like', 'Friendly_URL_3', $this->Friendly_URL_3])
            ->andFilterWhere(['like', 'Friendly_URL_4', $this->Friendly_URL_4]);

        return $dataProvider;
    }
}
