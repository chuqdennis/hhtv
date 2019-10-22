<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Backend</title>
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
        
      <!-- Start Contact Area -->
      <section class="htc__contact__area ptb--100 bg__white">
        <div class="container">
          <div class="row">
            <div class="contact-form-wrap mt--60">
              <div class="col-xs-12">
                  <div class="contact-title">
                      <h2 class="title__line--6">ADD DESIGNR</h2>
                  </div>
              </div>
              <div class="col-xs-12">
                <form id="contact-form" action="#" method="post">
                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="name" placeholder="Name of Designer*">
                      <select name="category" form="...">
                        <!-- Please make this multi-select -->
                        <option value="volvo">Ready-To-Wear</option>
                        <option value="saab">Urban Street</option>
                        <option value="opel">Couture</option>
                        <option value="audi">Haute Couture</option>
                        <!-- Ready-To-Wear, Urban Street, Couture, Haute Couture, Bridal/Evening Dresses, Male suits/Tuxedos, Workwear, Uniforms (School or Staff), Kiddies, Swimwear/Beachwear, Avante Garde, Costumes, Accessories, Undergarments -->
                      </select>
                      <select name="category" form="...">
                        <!-- Please make this multi-select -->
                        <option value="volvo">Male</option>
                        <option value="saab">Female</option>
                        <option value="opel">Unisex</option>
                        <option value="audi">Plus Size</option>
                      </select>
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="ig-link" placeholder="Instagram Page Link*">
                      <input type="email" name="email" placeholder="E-mail*">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box subject">
                      Main pix: <input type="file" name="myFile">
                    </div>
                    <div class="contact-box subject">
                      2nd pix: <input type="file" name="myFile">
                    </div>
                    <div class="contact-box subject">
                      3rd pix: <input type="file" name="myFile">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box message">
                      <textarea name="bio" placeholder="A bio/description"></textarea>
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box subject">
                      <input type="text" name="address" placeholder="Store address*">
                    </div>
                    <select name="category" form="...">
                      <!-- Please only Niger Delta States to be included -->
                      <option value="volvo">Rivers</option>
                      <option value="saab">Akwa Ibom</option>
                      <option value="opel">Imo</option>
                      <option value="audi">Abia</option>
                    </select>
                    <div class="contact-box subject">
                      <input type="text" name="phone" placeholder="Business phone number*">
                    </div>
                    <div class="contact-box subject">
                      <input type="email" name="email" placeholder="Business e-mail*">
                    </div>
                  </div>


                  <div class="contact-btn">
                    <button type="submit" class="fv-btn">Save</button>
                  </div>
                </form>
                <div class="form-output">
                  <p class="form-messege"></p>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
        
      <?php include_once('inc/footer.php'); ?>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->
    <?php include_once('inc/script.php'); ?>

</body>

</html>