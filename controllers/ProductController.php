<?php
namespace app\controllers;

use Yii;
use app\models\Tblbase;
use app\models\TblbaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

Yii::$app->language='en-GB';

class ProductController extends Controller
{
    public function actionCategory($categories)
    {
        $params = explode('/', $categories);

        if (sizeof($params)==4){
            $product = Yii::$app->db->createCommand('SELECT * FROM tblbase WHERE Friendly_URL_4="'.$categories.'"')->queryOne();
            $specs = Yii::$app->db->createCommand('SELECT Technical_Category_Description,Technical_Long_Description,Technical_Value FROM tblspec WHERE Derivative_CAP_Code="'.$product["Derivative_CAP_Code"].'" ORDER BY Technical_Category_Description ')->queryAll();
            $standard = Yii::$app->db->createCommand('select tblstandard.Derivative_Standard_Equipment_Category_Description, Derivative_Standard_Equipment_Description FROM tblstandard where tblstandard.Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY tblstandard.Derivative_Standard_Equipment_Category_Description ')->queryAll();
            $options = Yii::$app->db->createCommand('select Derivative_Option_Category_Description, Derivative_Option_Description, Derivative_Option_Basic_Price FROM tbloption where tbloption.Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY Derivative_Option_Category_Description ')->queryAll();
            $pricing = Yii::$app->db->createCommand('select Derivative_Rental_Term_Months, Derivative_Rental_Annual_Mileage, Derivative_Monthly_Rental_Price, Derivative_Monthly_Maintenance_Price FROM tblfunder where Derivative_CAP_Code = "'.$product["Derivative_CAP_Code"].'" ORDER BY Derivative_Monthly_Rental_Price ')->queryAll();
            $image = Yii::$app->db->createCommand('SELECT * FROM timage WHERE CAP_Id="'.$product["Derivative_CAP_ID"].'"')->queryOne();
            $allimages = Yii::$app->db->createCommand('select * FROM tallimages where Image_Set_ID = "'.$image["Image_Set_ID"].'" ORDER BY Image_Name ')->queryAll();
            return $this->render('car-leasing', array('content'=>$product,'specs'=>$specs,'standard'=>$standard,'options'=>$options,'pricing'=>$pricing,'image'=>$image,'allimages'=>$allimages));

        }
        if (sizeof($params)==1){
            $page = Yii::$app->db->createCommand('SELECT * FROM tblpages WHERE PageName="manufacturer_'.strtolower ($params[0]).'"')->queryOne();
            $vehiclemodels = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM tblbase WHERE Vehicle_Type ="Car" AND Manufacturer_Name="'.$params[0].'" ORDER BY Range_Name ')->queryAll();
            foreach ($vehiclemodels as $arr_veh_model) {
                $samplevehiclemodels = Yii::$app->db->createCommand('SELECT tblbase.*, tblfunder.Derivative_Monthly_Rental_Price,timage.Image_Set_ID FROM tblbase JOIN tblfunder
    ON tblbase.Derivative_CAP_Code = tblfunder.Derivative_CAP_Code JOIN timage ON tblbase.Derivative_CAP_ID=timage.CAP_Id WHERE  tblbase.Vehicle_Type ="Car" AND Manufacturer_Name = "'.$params[0].'" AND Range_Name="'.$arr_veh_model["Range_Name"].'" ORDER BY tblfunder.Derivative_Monthly_Rental_Price ')->queryOne();
                $samplevehiclemodelscount = Yii::$app->db->createCommand('SELECT count(Range_Name) as NumDealsAvailable  FROM tblbase JOIN tblfunder
    ON tblbase.Derivative_CAP_Code = tblfunder.Derivative_CAP_Code WHERE  Vehicle_Type ="Car" AND Range_Name="'.$arr_veh_model["Range_Name"].'"')->queryOne();
                $samplevehicleurbanmpg = Yii::$app->db->createCommand('SELECT Technical_Short_Description,Technical_Value FROM tblspec  
  WHERE Derivative_CAP_Code="'.$samplevehiclemodels["Derivative_CAP_Code"].'" AND Technical_Short_Description IN ("EC Urban (mpg)","EC Urban")')->queryOne();
                $samplevehiclempg = Yii::$app->db->createCommand('SELECT Technical_Short_Description,Technical_Value FROM tblspec  
  WHERE Derivative_CAP_Code="'.$samplevehiclemodels["Derivative_CAP_Code"].'" AND Technical_Short_Description IN ("EC Extra Urban (mpg)","EC Extra Urban")')->queryOne();
                /*        echo "<pre>";
                        var_dump($samplevehiclemodelscount);
                        echo "</pre>";*/





                if (is_array($samplevehiclemodels)){
                    if (isset($samplevehiclemodelscount)) {
                        $samplevehiclemodels += [ "NumDealsAvailable" => $samplevehiclemodelscount['NumDealsAvailable'] ];
                    }else{
                        $samplevehiclemodels += [ "NumDealsAvailable" => '0' ];
                    }
                    if (is_array($samplevehiclempg)) {
                        $samplevehiclemodels += [ "ExtraUrbanMPG" => $samplevehiclempg['Technical_Value'] ];
                    }else{
                        $samplevehiclemodels += [ "ExtraUrbanMPG" => '0' ];
                    }
                    if (is_array($samplevehicleurbanmpg)) {
                        $samplevehiclemodels += [ "UrbanMPG" => $samplevehicleurbanmpg['Technical_Value'] ];
                    }else{
                        $samplevehiclemodels += [ "UrbanMPG" => '0' ];
                    }
                    if (isset($samplevehicle)){
                        $samplevehicle = array_merge_recursive($samplevehicle, $samplevehiclemodels);
                    }else{
                        $samplevehicle = $samplevehiclemodels;
                    }

                }

            }

            return $this->render('manufacturer',array('page'=>$page,'samplevehicle'=>$samplevehicle,'vehiclemodels'=>$vehiclemodels));

        }

    }
}
