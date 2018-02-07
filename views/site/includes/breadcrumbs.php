<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'index') !== false) {
    $page_banner = 'home';
} elseif (($_SERVER['REQUEST_URI'] == '/') !== false) {
    $page_banner = 'home';
} else {
  print '
  <div class="site-breadcrum">
      <div class=" container">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="sitebread-inner">
                  <ul>
                      <li><a href="#"><img src="/images/home.png"></a></li>
                      <li class="breadcrum-child"><a href="#">PAGE NAME</a></li>
                      <li class="breadcrum-child"><a  href="#">Audi leasing deals</a></li>
                      <li class="breadcrum-child" ><a href="#">A1</a></li>
                      <li class="active">Advance Search</li>
                  </ul>
              </div>
          </div>

      </div>
  </div> ';

}
?>
