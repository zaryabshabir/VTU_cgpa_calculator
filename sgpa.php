<?php 
 include "server.php";


  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
    <title>VTU Calculator | ZXR</title>
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
    <link href="static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="static/css/style.css" rel='stylesheet' type='text/css' />
     <!-- font-awesome icons -->
    <link  href="static/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- pop up box -->
	<link href="static/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="static/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="static/css/owl.theme.css" type="text/css" media="all">
    <link href="style1.css" rel='stylesheet' type='text/css' /> 
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
                    <h1><a class="navbar-brand" href="index.php">
                           VTU Calc
                        </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                              <a class="hover-fill" aria-pressed="false" href="index.php" data-txthover="PERCENTAGE CALCULATOR">PERCENTAGE CALCULATOR</a>
                            </li>
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                                <a class="hover-fill" aria-pressed="false" href="sgpa.php" data-txthover="SGPA CALCULATOR">SGPA CALCULATOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="hover-fill" aria-pressed="false" href="cgpa.php" data-txthover="CGPA CALCULATOR">CGPA CALCULATOR</a>
                            </li>
                        </ul>
                    </div>
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
                <h3 class="text-center">VTU SGPA Calculator</h3>
        			</div>
            </div>
            <div class="row">
              <div class="col">
                <div class="container">
                <div class="login mb-sm-5 px-4 mx-auto mw-100">
                <form id="choose" action="#" method="post">
                    <fieldset>
                      <legend>Choose accordingly</legend>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">Sem</label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <select class="form-control" id="sem">
                            <option value="1st_sem">1st sem</option>
                            <option value="2nd_sem">2nd sem</option>
                            <option value="3rd_sem">3rd sem</option>
                            <option value="4th_sem">4th sem</option>
                            <option value="5th_sem">5th sem</option>
                            <option value="6th_sem">6th sem</option>
                            <option value="7th_sem">7th sem</option>
                            <option value="8th_sem">8th sem</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">Branch</label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <select class="form-control" id="branch">
                            <option value="1" >B.E-AERONAUTICAL ENGINEERING</option>
                            <option value="2" >B.E-AUTOMOBILE ENGINEERING</option>
                            <option value="3" >B.E-BIO-MEDICAL ENGINEERING</option>
                            <option value="4" >B.E-BIOTECHNOLOGY</option>
                            <option value="5" >B.E-CERAMICS & CEMENT TECHNOLOGY</option>
                            <option value="6" >B.E-CHEMICAL ENGINEERING</option>
                            <option value="7" >B.E-CIVIL ENGINEERING</option>
                            <option value="8" >B.E-COMPUTER SCIENCE & ENGINEERING</option>
                            <option value="9" >B.E-CONSTRUCTION TECHNOLOGY AND MANAGEMENT</option>
                            <option value="10">B.E-PRECISION MANUFACTURING</option>
                            <option value="11">B.E-ELECTRICAL & ELECTRONICS ENGINEERING</option>
                            <option value="12">B.E-ELECTRONICS & COMMUNICATION ENGINEERING</option>
                            <option value="13">B.E-ENVIRONMENTAL ENGINEERING</option>
                            <option value="14">B.E-INDUSTRIAL & PRODUCTION ENGINEERING</option>
                            <option value="15">B.E-INDUSTRIAL ENGINEERING & MANAGEMENT</option>
                            <option value="16">B.E-INFORMATION SCIENCE & ENGINEERING</option>
                            <option value="17">B.E-INSTRUMENTATION TECHNOLOGY</option>
                            <option value="18">B.E-MANUFACTURING SCIENCE & ENGINEERING</option>
                            <option value="19">B.E-MECHANICAL ENGINEERING</option>
                            <option value="20">B.E-MECHATRONICS ENGINEERING</option>
                            <option value="21">B.E-MEDICAL ELECTRONICS</option>
                            <option value="22">B.E-MINING ENGINEERING</option>
                            <option value="23">B.E-POLYMER SCIENCE & TECHNOLOGY</option>
                            <option value="24">B.E-PRINTING TECHNOLOGY</option>
                            <option value="25">B.E-SILK TECHNOLOGY</option>
                            <option value="26">B.E-TELECOMMUNICATION ENGINEERING</option>
                            <option value="27">B.E-TEXTILE TECHNOLOGY</option>
                            <option value="28">B.E-TRANSPORTATION ENGINEERING</option>
                            <option value="29">B.E-TOOL ENGINEERING</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-4">
                            <label class="col-form-label">Scheme</label>
                        </div>
                        <div class="col-md-6 mb-4">
                          <select class="form-control" id="scheme">
                            <option value="2018_scheme">2018</option>
                            <option value="2017_scheme">2017</option>
                            <!-- <option value="2015_scheme">2015</option> -->
                          </select>
                        </div>
                      </div>
                    </fieldset>
                    <br>

                    <div class='text-center' style="margin-top: 10px">
                        <button type="submit" class="get-started-btn">Submit</button>
                    </div>
                </form>
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
    	<p> <a id="conn" href="index.php?logout='1'">logout</a> </p>
      <?php endif ?>
    <!-- //footer -->
    <div class="cpy-right">
        <p class="text-white">© <script>document.write(new Date().getFullYear())</script> Design by
            <a href="https://instagram.com/zxaryab"> Zaryab</a>
        </p>
    </div>

    <!-- js -->
    <script src="static/js/jquery-2.2.3.min.js"></script>
	<!--pop-up-box -->
	<script src="static/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript">
    document.getElementById('choose').onsubmit = function() {
        if (document.getElementById('sem').value=="7th_sem" && document.getElementById('scheme').value=="2018_scheme" && document.getElementById('branch').value == 8) {
            window.location.replace("calc/"+document.getElementById('scheme').value+'-'+document.getElementById('sem').value+'s.php');
            return false;
        }
        window.location.replace("calc/"+document.getElementById('scheme').value+'-'+document.getElementById('sem').value+'.php?br='+document.getElementById('branch').value);
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
    <script src="static/js/move-top.js" ></script>
    <script src="static/js/easing.js"></script>
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
    <script src="static/js/owl.carousel.js"></script>
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
    <script src="static/js/SmoothScroll.min.js"></script>
    <script src="static/js/bootstrap.js"></script>
    
</body>
</html>
