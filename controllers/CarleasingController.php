<?php
namespace app\controllers;

use Yii;
use app\models\Tblbase;
use app\models\TblbaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

Yii::$app->language='en-GB';

class CarLeasingController extends Controller
{
 public function actionCarleasing()
    {

            $page = Yii::$app->db->createCommand('SELECT * FROM tblpages WHERE PageName="manufacturer_'.strtolower ($params[0]).'"')->queryOne();
            $manulogos = Yii::$app->db->createCommand('SELECT * FROM tlogos')->queryAll();


            return $this->render('manulist',array('page'=>$page,'manulogos'=>$manulogos));


     }
}
