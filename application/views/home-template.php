
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
              <p>ETM เป็นระบบที่ใช้จัดการรถให้มารับนักเรียนเพื่อลดอุบัติเหตุ
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
              <a class="navbar-brand" href="index.html" title="Home">
                <h1 class="hidden">
                    <img src="img/logo.png" alt="Flexor Logo">
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
              <strong>สวัสดีคุณ <?php echo $fullname; ?></strong>

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
              <li><a href="#">เพิ่มข้อมูลทะเบียน</a></li>
              <li><a href="#">เพิ่มข้อมูลนักเรียน</a></li>
              <li><a href="#">ติดต่อเรา</a></li>
              <li><a href="/auth/logout">ออกจากระบบ</a></li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container">
      <h2>
          รถที่ขับวันนี้
        </h2>
      <!--Intro-->
      <?php if ($defaultcar != null) { ?>
      <strong><?php echo $defaultcar->Brand." ".$defaultcar->Version; ?> สี <?php echo $defaultcar->Color; ?> ทะเบียน <?php echo $defaultcar->Text.' '.$defaultcar->Province; ?></strong>
      <?php } else { ?>
      <strong>ยังไม่ได้เลือกรถ</strong>
      <?php } ?>

        <h4>กรุณาเลือกรถ</h4>
        <?php
        $js = array(
        'id'       => 'updatecar',
        );
        $options = array();

        $options[0] = "กรณาเลือกรถ";
        foreach ($usercars as $car) {
          $options[$car->Car_ID] = $car->Brand.' '.$car->Version.' สี'.$car->Color .' ทะเบียน '.$car->Text.' '.$car->Province ;
        }

        echo form_dropdown('shirts', $options, $userdetail->Default_Car_ID, $js);
        ?>


      <div class="block block-border-bottom">
        <!--buttons-->

        <h4 class="margin-top-medium">
            กรุณากดปุ่มเพื่อเรียกนักเรียน
          </h4>
        <button type="button" class="btn btn-lg btn-primary">เรียกนักเรียน</button>
        <!--button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button-->
      </div>

      <div class="block block-border-bottom">
        <h4 class="block-title">
            นักเรียนที่ต้องรับ
          </h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>ชั้น</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $i = 1;
            foreach ($students as $student) { ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $student->First_Name; ?></td>
              <td><?php echo $student->Last_Name; ?></td>
              <td><?php echo $student->Level; ?></td>
            </tr>
            <?php $i++;
             } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">
      <a href="#top" class="scrolltop">Top</a>
      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>ETM ระบบกรวยอัฉริยะ </strong>
              <br>
              <strong>โรงเรียนกรุงเทพคริสเตียนวิทยาลัย</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> ถนน ประมวญ แขวงสีลม เขตบรางรัก กรุงเทพมหานคร 10150
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 02-637-1852 โทรสาร 02-637-9399
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> bcc_christian@bcc1852.com
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
              ติดต่อเรา
            </h4>
          <div class="form">
            <div id="sendmessage">ข้อความถูกส่งเรียบร้อยแล้ว</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">ส่งข้อความ</button></div>
            </form>
          </div>
        </div>

        <div class="col-md-3">
          <h4 class="text-uppercase">
              สามารถติดตามเราได้ที่:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="https://www.facebook.com/BCClive1852"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>

      </div>
      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © โรงเรียนกรุงเทพคริสเตียนวิทยาลัย</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
            <!--a href="https://bootstrapmade.com/"-->Bootstrap Templates<!--/a--> by BootstrapMade.com
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">ติดต่อเรา</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="/assets/lib/jquery/jquery.min.js"></script>
  <script src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/stellar/stellar.min.js"></script>
  <script src="/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="/assets/lib/counterup/counterup.min.js"></script>
  <script src="/assets/contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="/assets/js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="/assets/js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="/assets/contactform/contactform.js"></script>

</body>

</html>
