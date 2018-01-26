
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="/assets/img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="/assets/img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <!-- Required JavaScript Libraries -->
  <script src="/assets/lib/jquery/jquery.min.js"></script>

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<!-- ======== @Region: body ======== -->

<body class="page-elements">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
      <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-md-3">
              <h3>
                  เกี่ยวกับเรา
                </h3>
              <p>BCC E-TM ระบบกรวยอัฉริยะ
              <a href="#" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
            </div>
            <div class="col-md-3">
              <!--@todo: replace with company contact details-->
              <h3>
                ติดต่อเรา
                </h3>
              <address>
                  <strong>โรงเรียนกรุงเทพคริสเตียนวิทยาลัย</strong>
                  <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                    35 ถนน ประมวญ แขวงสีลม เขตบรางรัก กรุงเทพมหานคร 10150
                  <br>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                  02-637-1852 โทรสาร 02-637-9399
                  <br>
                  <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                  bcc_christian@bcc1852.com
                </address>
            </div>
          </div>
        </div>
      </div>
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-4">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <a class="navbar-brand" href="/" title="Home">
                <h1 class="hidden">
                    <img src="/assets/img/logo.png" alt="bcc(e-tm) logo">
                    ETM
                  </h1>
              </a>
              <div class="navbar-slogan">
                  รับถูกคน รถถูกคัน
                <br> โรงเรียนกรุงเทพคริสเตียนวิทยาลัย
              </div>
            </div>
            <!-- hello name -->
            <div class="col-md-4">
              <h4>สวัสดีคุณ <?php echo $fullname; ?></h4>

            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <!--li class="hidden-xs"><i class="fa fa-edit text-primary"></i> <a href="register.html" class="text-uppercase">Register</a></li>
                <li class="hidden-xs"><i class="fa fa-sign-in text-primary"></i> <a href="login.html" class="text-uppercase">Login</a></li-->
                <li><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/BCClive1852"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="/"><i class="fa fa-home"></i></a>
              </li>
              <li><a href="/home/addplate/<?php echo $this->session->userdata('userid'); ?>">เพิ่มข้อมูลทะเบียน</a></li>
              <li><a href="#">เพิ่มข้อมูลนักเรียน</a></li>
              <li><a href="#">ดูรายการย้อนหลัง</a></li>
              <li><a href="/auth/logout">ออกจากระบบ</a></li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>
  </div>
