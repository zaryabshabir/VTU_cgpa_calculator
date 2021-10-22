<?php 
 include "../server.php";


  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../login.php");
  }?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>VTU Calculator | ZARYAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="sgpa Calculator, Calculator, cgpa Calculator, VTU, cbcs,non cbcs" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="../static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../static/css/style.css" rel='stylesheet' type='text/css' />
     <!-- font-awesome icons -->
    <link  href="../static/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- pop up box -->
	<link href="../static/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../static/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="../static/css/owl.theme.css" type="text/css" media="all">
    <link href="../style1.css" rel='stylesheet' type='text/css' /> 
	<!-- Carousel (for News section) -->
    <!-- //Custom Theme files -->
    <!-- online fonts -->
    <!-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet"> -->
    <!--//online fonts -->
</head>
<body>
    <!-- header -->
    <header>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="../index.php">
                           VTU Calc
                        </a>
                    </h1>
                <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ml-auto">
                      <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                        <a class="hover-fill" aria-pressed="false" href="../index.php" data-txthover="PERCENTAGE CALCULATOR">PERCENTAGE CALCULATOR</a>
                      </li>
                      <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                          <a class="hover-fill" aria-pressed="false" href="../sgpa.php" data-txthover="SGPA CALCULATOR">SGPA CALCULATOR</a>
                      </li>
                      <li class="nav-item">
                          <a class="hover-fill" aria-pressed="false" href="../cgpa.php" data-txthover="CGPA CALCULATOR">CGPA CALCULATOR</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="screenview_bg bg-theme px-3">
		<div class="container">
          <section class="wthree-row w3-gallery py-5">
        		<div class="container py-xl-5">
        			<div class="w3l_header mb-sm-5 pb-3">
                <h3 class="text-center">1st SEM SGPA</h3>
        			</div>
            </div>
                <!-- //gallery container -->

                    <div class="container">
                    <div class="login mb-sm-5 px-4 mx-auto mw-100">
                    <form id="1stsem" action="#" method="post">
                      <div class="row">
                      <div class="col-5">
                        <fieldset>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18MAT11</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18MAT11" name="18MAT11" placeholder="18MAT11" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXX12</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXX12" name="18XXX12" placeholder="18XXX12" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXX13</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXX13" name="18XXX13" placeholder="18XXX13" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXX14</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXX14" name="18XXX14" placeholder="18XXX14" required>
                              </div>
                            </div>
                      </fieldset>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-5">
                      <fieldset>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXX15</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXX15" name="18XXX15" placeholder="18XXX15" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXL16</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXL16" name="18XXL16" placeholder="18XXL16" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXL17</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXL17" name="18XXL17" placeholder="18XXL17" required>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">18XXX18</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="18XXX18" name="18XXX18" placeholder="18XXX18" required>
                              </div>
                            </div>
                        </fieldset>
                        <br>
                      </div>
                      </div>
                        <div class='text-center' style="margin-top: 10px">
                            <button type="submit" class="get-started-btn">Calculate SGPA</button>
                        </div>
                    </form>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col">
                    <fieldset disabled>
                      <div class="container" style="margin:0 auto; width: 50%;">
                        <legend>Result</legend>
                          <div class="form-row">
                            <div class="form-group col-md-6 mb-4">
                                <label class="col-form-label">SGPA</label>
                            </div>
                            <div class="col-md-6 mb-4">
                              <input type="text" id="sgpa" class="form-control" placeholder="SGPA">
                            </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-6 mb-4">
                                  <label class="col-form-label">Percentage</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                  <input type="text" id="percentage" class="form-control" placeholder="Percentage">
                              </div>
                          </div>
                        </div>
                    </fieldset>
                  </div>
                </div>

            </section>
		</div>
    </div>
    <!-- //banner -->
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
      <?php endif ?>
  
      <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
          <p id="con">Logged in <strong><?php echo $_SESSION['username']; ?></strong></p>
          <p id="conn"> <a href="../index.php?logout='1'">logout</a> </p>
      <?php endif ?>
    <!-- //footer -->
    <div class="cpy-right">
        <p class="text-white">© <script>document.write(new Date().getFullYear())</script> Design by
            <a href="https://instagram.com/zxaryab"> Zaryab</a>
        </p>
    </div>

    <!-- js -->
    <script src="../static/js/jquery-2.2.3.min.js"></script>
	<!--pop-up-box -->
	<script src="../static/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript">
    document.getElementById('1stsem').onsubmit = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const branch = urlParams.get('br');
        var i = 0;
        if (branch==1){
          i=1;
        }
        else if (branch==2) {
          i=2;
        }
        const tc=20;
        var sum=0;
        var sqpa;
        const credits = [4,4,3,3,3,1,1,1];
        const sub = ["18MAT11", "18XXX12", "18XXX13", "18XXX14", "18XXX15", "18XXL16", "18XXL17", "18XXX18"];
        sub.forEach(myFunction);

        function myFunction(value, index, array) {
          var g = document.getElementById(value).value;
          if (g >=90){
            sum+=10*credits[index];
          }
          else if (g >=80){
            sum+=9*credits[index];
          }
          else if (g >=70){
            sum+=8*credits[index];
          }
          else if (g >=60){
            sum+=7*credits[index];
          }
          else if (g >=45){
            sum+=6*credits[index];
          }
          else if (g >=40){
            sum+=4*credits[index];
          }
          else{
            sum+=0;
          }
        }
        sgpa = sum/tc;
        document.getElementById('sgpa').value = sgpa.toFixed(2);
        percentage = (sgpa-0.75)*10;
        document.getElementById('percentage').value = percentage.toFixed(2);
        return false;
    };
  </script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
    <!-- start-smooth-scrolling -->
    <script src="../static/js/move-top.js" ></script>
    <script src="../static/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
	 <!-- carousel -->
    <script src="../static/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->


    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
             var defaults = {
            	 containerID: 'toTop', // fading element id
            	 containerHoverID: 'toTopHover', // fading element hover id
            	 scrollSpeed: 1200,
            	 easingType: 'linear'
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="../static/js/SmoothScroll.min.js"></script>
    <script src="../static/js/bootstrap.js"></script>
   
</body>
</html>
