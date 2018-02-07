<?php
namespace app\controllers;

use Yii;
use app\models\Tblbase;
use app\models\TblbaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

Yii::$app->language='en-GB';

class ResultsapiController extends Controller
{
    public function actionCategory($categories)
    {
        $params = explode('/', $categories);

        if (sizeof($params)==1){

            $manus = Yii::$app->db->createCommand('SELECT DISTINCT Manufacturer_name FROM v_search WHERE Vehicle_Type="'.$params[0].'" ORDER BY Manufacturer_name ')->queryAll();

            header('Content-type: application/json');
            if (sizeof($manus) > 0){
                $response["Result"] = 1;
                $response["message"] = sizeof($manus);
                $response["manus"] = $manus;
            }else{
                $response["Result"] = 0;
                $response["message"] = "No Data";
            }
            echo json_encode($response);


        }

        if (sizeof($params)==2){
            $manus = Yii::$app->db->createCommand('SELECT DISTINCT Manufacturer_name FROM v_search WHERE Vehicle_Type="'.$params[0].'" ORDER BY Manufacturer_name ')->queryAll();

            if ($params[1]=="All"){
                $models = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND Manufacturer_Name="All" ORDER BY Range_Name ')->queryAll();
                $countofdeals = Yii::$app->db->createCommand('SELECT COUNT(Derivative_Monthly_Rental_Price) AS NumberOfDeals FROM v_search WHERE  Vehicle_Type="'.$params[0].'" ')->queryOne();

            }else{
                $models = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'" ORDER BY Range_Name ')->queryAll();
                $countofdeals = Yii::$app->db->createCommand('SELECT COUNT(Derivative_Monthly_Rental_Price) AS NumberOfDeals  FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'"')->queryOne();

            }

            header('Content-type: application/json');
            if (sizeof($manus) > 0){
                $response["Result"] = 1;
                $response["message"] = $countofdeals["NumberOfDeals"];
                $response["manus"] = $manus;
                $response["models"] = $models;
            }else{
                $response["Result"] = 0;
                $response["message"] = "No Data";
            }
            echo json_encode($response);
        }
        if (sizeof($params)==3){
            $manus = Yii::$app->db->createCommand('SELECT DISTINCT Manufacturer_name FROM v_search WHERE Vehicle_Type="'.$params[0].'" ORDER BY Manufacturer_name ')->queryAll();

            $models = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'" ORDER BY Range_Name ')->queryAll();
            $countofdeals = Yii::$app->db->createCommand('SELECT COUNT(Derivative_Monthly_Rental_Price) AS NumberOfDeals  FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'" AND Range_Name="'.$params[2].'"')->queryOne();

            header('Content-type: application/json');
            if (sizeof($manus) > 0){
                $response["Result"] = 1;
                $response["message"] = $countofdeals["NumberOfDeals"];
                $response["manus"] = $manus;
                $response["models"] = $models;
            }else{
                $response["Result"] = 0;
                $response["message"] = "No Data";
            }
            echo json_encode($response);
        }
        if (sizeof($params)==4){
            $manus = Yii::$app->db->createCommand('SELECT DISTINCT Manufacturer_name FROM v_search WHERE Vehicle_Type="'.$params[0].'" ORDER BY Manufacturer_name ')->queryAll();

            $models = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'" ORDER BY Range_Name ')->queryAll();
            $countofdeals = Yii::$app->db->createCommand('SELECT COUNT(Derivative_Monthly_Rental_Price) AS NumberOfDeals  FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND  Manufacturer_Name="'.$params[1].'" AND Range_Name="'.$params[2].'" AND Derivative_Monthly_Rental_Price > '.$params[3].'')->queryOne();

            header('Content-type: application/json');
            if (sizeof($manus) > 0){
                $response["Result"] = 1;
                $response["message"] = $countofdeals["NumberOfDeals"];
                $response["manus"] = $manus;
                $response["models"] = $models;
            }else{
                $response["Result"] = 0;
                $response["message"] = "No Data";
            }
            echo json_encode($response);
        }
        if (sizeof($params)==5){
            $manus = Yii::$app->db->createCommand('SELECT DISTINCT Manufacturer_name FROM v_search WHERE Vehicle_Type="'.$params[0].'" ORDER BY Manufacturer_name ')->queryAll();

            $models = Yii::$app->db->createCommand('SELECT DISTINCT Range_Name FROM v_search WHERE Vehicle_Type="'.$params[0].'" AND Manufacturer_Name="'.$params[1].'" ORDER BY Range_Name ')->queryAll();
            if ($params[1]=='all'){
                $manuqueryparam = "";
            }else{
                $manuqueryparam = " Manufacturer_Name='".$params[1]."' AND ";
            }
            if ($params[2]=='all'){
                $rangequeryparam = "";
            }else{
                $rangequeryparam = " Range_Name='".$params[2]."' AND ";
            }
            $countofdeals = Yii::$app->db->createCommand('SELECT COUNT(Derivative_Monthly_Rental_Price) AS NumberOfDeals  FROM v_search WHERE Vehicle_Type="'.$params[0].'"  AND '.$manuqueryparam.$rangequeryparam.' Derivative_Monthly_Rental_Price BETWEEN '.$params[3].' AND '.$params[4].'')->queryOne();

            header('Content-type: application/json');
            if (sizeof($manus) > 0){
                $response["Result"] = 1;
                $response["message"] = $countofdeals["NumberOfDeals"];
                $response["manus"] = $manus;
                $response["models"] = $models;
            }else{
                $response["Result"] = 0;
                $response["message"] = "No Data";
            }
            echo json_encode($response);
        }
    }
}
