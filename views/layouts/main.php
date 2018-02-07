<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="theme-color" content="#BA0C2F"> <!-- THIS IS CODE I ADDED TO CHANGE THE ADDRESS BAR COLOUR ON MOBILE SITES -->
    <title><?= Html::encode($this->title) ?></title>
    <?php include(CONST_ROOTDIR.'/views/site/includes/header.php'); ?>


</head>
<body>

  <?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


  if (strpos($url,'about-us') !== false) {
      $page_banner = 'about';
  } elseif (strpos($url,'index') !== false) {
      $page_banner = 'home';
  } elseif (($_SERVER['REQUEST_URI'] == '/') !== false) {
      $page_banner = 'home';
  } elseif  (strpos($url,'meet-the-team') !== false) {
        $page_banner = 'meet_team';
  } else {
    $page_banner = 'light';

  }
?>
<header class="<?= $page_banner ?>_banner">
    <?php include(CONST_ROOTDIR.'/views/site/includes/navbar.php'); ?>
    <?php include(CONST_ROOTDIR.'/views/site/includes/breadcrumbs.php'); ?>

<?php /** </HEADER> IS CLOSED IN EACH FILE INDIVIDUALLY **/ ?>

<?= $content ?>


<footer id="footer">
    <?php include(CONST_ROOTDIR.'/views/site/includes/footer.php'); ?>
</footer>
<?php include(CONST_ROOTDIR.'/views/site/includes/js_includes.php'); ?>

</body>
</html>

<?php $this->endPage() ?>
