
<div class="slick-for">
  <?php foreach ($allimages as $value) { ?>
    <div>
      <img class="img-responsive" src="/Vimages/<?=$value["Image_Name"] ?>" />
    </div>
  <?php } ?>
</div>


<div class="slick-nav">
  <?php foreach ($allimages as $value) { ?>
    <div class="col-md-2">
      <img class="img-responsive" src="/Vimages/<?=$value["Image_Name"] ?>" />
    </div>
  <?php } ?>
</div>
