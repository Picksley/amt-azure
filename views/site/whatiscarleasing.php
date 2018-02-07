<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AMT Vehicle Group | Leasing Guide | What is car leasing?';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
  <div class="col-md-12">
    <div class="page-title-dark">
      <h1 class="wow fadeInUp">What is car leasing?</h1>
      <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem Ipsum si dolor etum.</p>
    </div>
  </div>
</div>
</header>




<section class="customers-col">
<div class="container">
<div class="col-md-12">
<div class="title2">
<h1>What our customers are saying about us</h1>
</div>
</div>
</div>

<?php include(CONST_ROOTDIR.'/views/site/testimonials.php'); ?>


</section>



<?php  include(CONST_ROOTDIR.'/views/site/newsletter.php');  ?>
