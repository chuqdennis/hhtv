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
                      <h2 class="title__line--6">SEND A MAIL</h2>
                  </div>
              </div>
              <div class="col-xs-12">
                <form id="contact-form" action="#" method="post">
                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="name" placeholder="Your Name*">
                      <input type="email" name="email" placeholder="Mail*">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box subject">
                      <input type="text" name="subject" placeholder="Subject*">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box message">
                      <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                  </div>
                  <div class="contact-btn">
                    <button type="submit" class="fv-btn">Send MESSAGE</button>
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