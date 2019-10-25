<!doctype html>
<?php 
  include_once '../config/admin.php';
  $site = new admin;
  $query = "SELECT * FROM designers";
  $designers = $site->getDesigners($query);
 ?>
<html class="no-js" lang="en">
<head>
  <title>His&Hers &middot; The Fashion Directory</title>
  <?php include_once('inc/metalinks.php'); ?>
</head>

<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->  

  <div class="wrapper">
    <?php include_once('inc/navbar.php'); ?>

    <!-- Start Top Rated Area -->
    <section class="top__rated__area bg__white pt--100 pb--110">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section__title--2 text-center">
              <h2 class="title__line">The Fashion Directory</h2>
              <p>A database of fantastic designers in the Niger Delta doing remarkable work in the fashion industry.</p>
            </div>
          </div>
        </div>

        <div class="row mt--20">
          <div class="shop__grid__view__wrap">
            <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
              <!-- Start Single Product -->
              <?php 
                  if (count($designers) < 1) {
                    echo '<div class="col-md-12"><center><h2>No designer found</h2></center></div>';
                  }else{
                    foreach ($designers as $key => $des) {
                    ?>
                      <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="category">
                          <div class="ht__cat__thumb">
                            <a href="details.php?designer=<?=$des->designer_id ?>">
                              <img src="images/<?=$des->pc_1 ?>" alt="product images">
                            </a>
                          </div>
                          <div class="fr__product__inner">
                            <h4><a href="details.php?designer=<?=$des->designer_id ?>"><?=$des->designer_name ?></a></h4>
                            <p><i class="icon-tag icons"></i> <?=$des->style ?></p>
                            <ul class="fr__pro__prize">
                              <li class="old__prize">Check out</li>
                              <li><a href="<?=$des->ig_link ?>" target="_blank"><i class="icon-social-instagram icons"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                  }
               ?>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    <!-- Start Footer Area -->
    <?php include_once('inc/footer.php'); ?>
  </div>
  <!-- Body main wrapper end -->

  <!-- Placed js at the end of the document so the pages load faster -->

  <!-- jquery latest version -->
  <script src="js/vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap framework js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js plugins included in this file. -->
  <script src="js/plugins.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!-- Waypoints.min.js. -->
  <script src="js/waypoints.min.js"></script>
  <!-- Main js file that contents all jQuery plugins activation. -->
  <script src="js/main.js"></script>

</body>

</html>