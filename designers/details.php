<!doctype html>
<?php 
  include_once '../config/admin.php';
  $site = new admin;
  if (!isset($_GET['designer'])) {
    echo '<script>location.href="index.php"</script>';
  }else{
    $designer = $site->getty('designer');
    $query = "SELECT * FROM designers WHERE designer_id='$designer' ";
    $info = $site->getDesignerInfo($query);
  }
 ?>
<html class="no-js" lang="zxx">
<head>
    <title>Details</title>
    <?php include_once('inc/metalinks.php'); ?>
    <meta name="description" content="">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
      <?php include_once('inc/navbar.php'); ?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
          <div class="ht__bradcaump__wrap">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="bradcaump__inner">
                    <nav class="bradcaump-inner">
                      <a class="breadcrumb-item" href="index.php">Home</a>
                      <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                      <a class="breadcrumb-item" href="directory.php">Directory</a>
                      <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                      <span class="breadcrumb-item active"><?=$info->designer_name ?></span>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white ptb--100">
          <!-- Start Product Details Top -->
          <div class="htc__product__details__top">
            <div class="container">
              <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                  <div class="htc__product__details__tab__content">
                    <!-- Start Product Big Images -->
                    <div class="product__big__images">
                      <div class="portfolio-full-image tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                          <img src="images/<?=$info->pc_1 ?>" alt="full-image">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                          <img src="images/<?=$info->pc_2 ?>" alt="full-image">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                          <img src="images/<?=$info->pc_3 ?>" alt="full-image">
                        </div>
                      </div>
                    </div>
                    <!-- End Product Big Images -->
                    <!-- Start Small images -->
                    <ul class="product__small__images" role="tablist">
                      <li role="presentation" class="pot-small-img active">
                        <a href="#img-tab-1" role="tab" data-toggle="tab">
                          <img src="images/<?=$info->pc_1 ?>" alt="small-image">
                        </a>
                      </li>
                      <li role="presentation" class="pot-small-img">
                        <a href="#img-tab-2" role="tab" data-toggle="tab">
                          <img src="images/<?=$info->pc_2 ?>" alt="small-image">
                        </a>
                      </li>
                      <li role="presentation" class="pot-small-img">
                        <a href="#img-tab-3" role="tab" data-toggle="tab">
                          <img src="images/<?=$info->pc_3 ?>" alt="small-image">
                        </a>
                      </li>
                    </ul>
                    <!-- End Small images -->
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                  <div class="ht__product__dtl">
                    <h2><?=$info->designer_name ?></h2>
                    <h6><i class="icon-tag icons"></i> <span><?=$info->style ?></span></h6>
                    <h6><i class="icon-user icons"></i> <span><?=$info->gender ?></span></h6>
                    <ul  class="pro__prize">
                      <li class="old__prize">Check out on </li>
                      <li><a href="<?=$info->ig_link ?>" target="_blank"><i class="icon-social-instagram icons"></i></a></li>
                    </ul>
                    <p class="pro__info"><?=$info->bio ?></p>
                    <div class="ht__pro__desc">
                      <div class="sin__desc">
                        <p><span>Store:</span> <?=$info->store_addr ?>.</p>
                      </div>
                      <div class="sin__desc">
                        <p><span>State:</span> <?=$info->state ?></p>
                      </div>
                      <div class="sin__desc">
                        <p><span>Phone:</span> <?=$info->bus_phone ?></p>
                      </div>
                      <div class="sin__desc">
                        <p><span>Biz email:</span> <?=$info->bus_email ?></p>
                      </div>
                      <div class="sin__desc align--left">
                        <p><span>Categories:</span></p>
                        <ul class="pro__cat__list">
                          <li><a href="#"><?=$info->style ?>,</a></li>
                          <li><a href="#">Ready-To-Wear,</a></li>
                          <li><a href="#">Avante Garde,</a></li>
                        </ul>
                      </div>

                      <div class="sin__desc product__share__link">
                        <p><span>Share this:</span></p>
                        <ul class="pro__share">
                          <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>
                          <li><a href="<?=$info->ig_link ?>" target="_blank"><i class="icon-social-instagram icons"></i></a></li>
                          <li><a href="#" target="_blank"><i class="icon-social-facebook icons"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->
        
        <?php include_once('inc/footer.php'); ?>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <?php include_once('inc/script.php'); ?>

</body>

</html>