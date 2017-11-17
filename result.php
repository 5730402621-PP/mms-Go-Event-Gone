<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Go Event Gone</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <!-- Date timepicker-->

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/daterangepicker.css" />
    <script type="text/javascript" src="assets/js/moment.js"></script>
    <script type="text/javascript" src="assets/js/daterangepicker.js"></script>

  </head>

  <body>
    <!-- Header Section Start -->

    <div class="header">
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="signin.php"><i class="lnr lnr-enter"></i> Sign-in</a></li>
              <li><a href="signup.php"><i class="lnr lnr-user"></i> Sign-up</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post request </a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
    </div>
    <!-- Header Section End -->

    <!-- Start intro section -->
    <section id="intro">
      <br/>
      <div class="overlay">
        <div class="container">
          <div class="main-text">


            <!-- Start Search box -->
            <div class="row search-bar">
              <div class="advanced-search">
                <form class="search-form" action="result.php" method="get">

                  <div class="col-md-3 col-sm-6 ">
                    <input class="form-control keyword" name="keyword" value=<?php printf("\"%s\"", $_GET["keyword"]); ?> placeholder="Enter Location" type="text">
                    <i class="fa fa-search"></i>
                  </div>

                    <div class="col-md-4 demo">
                      <input type="text" id="datepicker" class="form-control">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </div>

                    <script type="text/javascript">
                      var options = {};
                      options.timePicker = false;
                      options.startDate = "12/01/2017";
                      options.endDate = "12/31/2017";

                      $('#datepicker').daterangepicker(options);
                    </script>


                  <div class="col-md-3 col-sm-6">
                    <div class="search-category-container">
                        <select class="dropdown-product selectpicker" name="product-cat">
                          <?php
                            $s1 = "";
                            $s2 = "";
                            $s3 = "";
                            $s4 = "";
                            $s5 = "";
                            $s6 = "";
                            $s7 = "";
                            $s8 = "";
                            $s9 = "";
                            $s10 = "";
                            $s11 = "";

                            if ($_GET["product-cat"] == 0)
                              $s1 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 50)
                              $s2 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 100)
                              $s3 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 150)
                              $s4 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 200)
                              $s5 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 250)
                              $s6 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 300)
                              $s7 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 350)
                              $s8 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 400)
                              $s9 = "selected=\"selected\" ";
                            else if ($_GET["product-cat"] == 450)
                              $s10 = "selected=\"selected\" ";
                            else
                              $s11 = "selected=\"selected\" ";

                            printf("
                            <option %svalue=\"0\">Capacity : All</option>
                            <option %svalue=\"50\">< 50 m&sup2;</option>
                            <option %svalue=\"100\"> 50 - 100 m&sup2;</option>
                            <option %svalue=\"150\">100 - 150 m&sup2;</option>
                            <option %svalue=\"200\">150 - 200 m&sup2;</option>
                            <option %svalue=\"250\">200 - 250 m&sup2;</option>
                            <option %svalue=\"300\">250 - 300 m&sup2;</option>
                            <option %svalue=\"350\">300 - 350 m&sup2;</option>
                            <option %svalue=\"400\">350 - 400 m&sup2;</option>
                            <option %svalue=\"450\">400 - 450 m&sup2;</option>
                            <option %svalue=\"500\">> 500 m&sup2;</option>
                            ", $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10, $s11);
                          ?>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-2 ">
                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                  </div>

                </form>
              </div>
            </div>
            <!-- End Search box -->
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->


      <!-- Featured Listings Start -->
      <section class="featured-lis" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
              <h3 class="section-title">Result</h3>
              <div id="new-products" class="owl-carousel">
                <?php
                  include "setsql.php";
                  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                  $q = "";

                  $keyword = $_GET["keyword"];
                  $capacity = $_GET["product-cat"];

                  if ($capacity == 0) {
                    $q = sprintf("SELECT P.pid, P.name, P.price FROM place P WHERE P.name LIKE '%%%s%%' OR P.address LIKE '%%%s%%' OR P.subdistrict LIKE '%%%s%%' OR P.district LIKE '%%%s%%' OR P.province LIKE '%%%s%%'", $keyword, $keyword, $keyword, $keyword, $keyword);
                  }
                  else {
                    $q = sprintf("SELECT P.pid, P.name, P.price FROM place P WHERE P.size <= %s AND P.size >= %s AND (P.name LIKE '%%%s%%' OR P.address LIKE '%%%s%%' OR P.subdistrict LIKE '%%%s%%' OR P.district LIKE '%%%s%%' OR P.province LIKE '%%%s%%')", $capacity, $capacity - 50, $keyword, $keyword, $keyword, $keyword, $keyword);
                  }

                  $result = $mysqli->query($q);
                  if (mysqli_num_rows($result) == 0)
                    printf("
                      <div class=\"item\">
                        <div class=\"product-item\">
                          <div class=\"carousel-thumb\">
                            <a>NOT FOUND</a>
                          </div>
                        </div>
                      </div>
                    ");
                  while ($row = $result->fetch_assoc()) {
                    printf("
                    <div class=\"item\">
                      <div class=\"product-item\">
                        <div class=\"carousel-thumb\">
                          <img src=\"assets/img/place/%s/00.jpg\" width=200 height=130 alt=\"\">
                          <div class=\"overlay\">
                            <a href=\"detail.php?pid=%s\"><i class=\"fa fa-link\"></i></a>
                          </div>
                        </div>
                        <a href=\"detail.php?pid=%s\" class=\"price\">%s</a>
                        <span>เริ่มต้นที่ %d บาท / วัน</span>
                      </div>
                    </div>
                    ", $row["pid"], $row["pid"], $row["pid"], $row["name"], $row["price"]);
                  }
                ?>
                <!-- <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/2.png" alt="">
                    </div>
                    <a href="detail.html" class="price">อโศก</a>
                    <span>เริ่มต้นที่ 2,000 บาท / วัน</span>
                  </div>
                </div>

                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/3.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">นานา</a>
                    <span >เริ่มต้นที่ 1,500 บาท / วัน</span>
                  </div>
                </div>

                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/4.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">เพลินจิต</a>
                    <span>เริ่มต้นที่ 1,200 บาท / วัน</span>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/5.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">ชิดลม</a>
                    <span>เริ่มต้นที่ 1,800 บาท / วัน </span>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/6.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">สยาม</a>
                    <span>เริ่มต้นที่ 3,000 บาท / วัน</span>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/7.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">ราชเทวี</a>
                    <span>เริ่มต้นที่ 1,400 บาท / วัน</span>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/8.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">พร้อมพงษ์</a>
                    <span>เริ่มต้นที่ 1,200 บาท / วัน</span>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="assets/img/place/9.png" alt="">
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="ads-details.html" class="price">สีลม</a>
                    <span>เริ่มต้นที่ 2,800 บาท / วัน</span>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Listings End -->

    <!-- Footer Section Start -->
    <footer>
    	<!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2016 - Design & Development by <a rel="nofollow" href="http://graygrids.com">Graygrids</a></p>
              </div>
              <div class="bottom-social-icons social-icon pull-right">
                <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="#"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>

  </body>
</html>
