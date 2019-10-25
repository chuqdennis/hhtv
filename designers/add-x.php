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
                <form id="designer-form" action="#" method="post" enctype="multipart/form-data">
                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="name" placeholder="Name of Designer*">
                      <select name="style" required="">
                        <option>Ready-To-Wear</option>
                        <option>Urban Street</option>
                        <option>Couture</option>
                        <option>Haute Couture</option>
                      </select>
                      <select name="category" required="">
                        <!-- Please make this multi-select -->
                        <option>Male</option>
                        <option>Female</option>
                        <option>Unisex</option>
                        <option>Plus Size</option>
                      </select>
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box name">
                      <input type="text" name="ig_link" placeholder="Instagram Page Link*">
                      <input type="email" name="email" placeholder="E-mail*">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box subject">
                      Main pix: <input type="file" name="file_1" required="">
                    </div>
                    <div class="contact-box subject">
                      2nd pix: <input type="file" name="file_2">
                    </div>
                    <div class="contact-box subject">
                      3rd pix: <input type="file" name="file_3">
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box message">
                      <textarea name="bio" required="" placeholder="A bio/description"></textarea>
                    </div>
                  </div>
                  <div class="single-contact-form">
                    <div class="contact-box subject">
                      <input type="text" name="address" required="" placeholder="Store address*">
                    </div>
                    <br>
                    <select name="state" class="form-control">
                      <option>Rivers</option>
                      <option>Akwa Ibom</option>
                      <option>Imo</option>
                      <option>Abia</option>
                    </select><br>
                    <div class="contact-box subject">
                      <input type="text" name="phone" placeholder="Business phone number*" required="">
                    </div><br>
                    <div class="contact-box subject">
                      <input type="email" name="bus_email" placeholder="Business e-mail*" required="">
                    </div>
                  </div><br>

                  <div class="err">
                    
                  </div>
                  <div class="contact-btn">
                    <button type="submit" id="save-btn" class="fv-btn">Save</button>
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
    <script type="text/javascript">
      /** function for admin to login **/
$("#designer-form").on('submit',(function(e) {
    e.preventDefault();
    $("#save-btn").attr('disabled', true).html("Adding designer...");
    var datas = new FormData(this);
    $.ajax({
        url: "../config/save-designer.php",
        type: "POST",
        data: datas, 
        contentType: false,
        cache: false,
        processData:false,        
        success: function(data){
            if(data.trim() == "done"){
                $(".err").html('<p class="alert alert-success">Designer added successfully</p>');
              setTimeout(
                function () {
                  $('#designer-form')[0].reset()
                  $(".err").html('');
                }, 3000);
            }else{
                $("#save-btn").attr('disabled',false).html('Save');
                $(".err").html('<p class="alert alert-danger">'+data+'</p>');
                setTimeout(
                function () {
                  $(".err").html('');
                }, 3000);
            }
        },
        error : function(e){
            console.log(e);
        }
    });
  }));
    </script>

</body>

</html>