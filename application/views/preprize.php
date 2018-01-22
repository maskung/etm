<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Responsive View Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Animate.CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css"> 

    <!-- Font Aewsome Style -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Reset Style -->
    <link rel="stylesheet" href="/assets/css/normalize.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="/assets/css/main.css">
    
    <!-- alternate style start || to use your preferred color, simply remove all style colors below and leave only your preferred color -->   
    <link href="/assets/css/colors/dark.css" rel="stylesheet">
    <link href="/assets/css/colors/brick.css" rel="stylesheet">
    <link href="/assets/css/colors/turquoise.css" rel="stylesheet">
    <link href="/assets/css/colors/violet.css" rel="stylesheet">
    <link href="/assets/css/colors/purple.css" rel="stylesheet">
    <link href="/assets/css/colors/pink.css" rel="stylesheet">
    <link href="/assets/css/colors/orange.css" rel="stylesheet">   
    <link href="/assets/css/colors/blue-2.css" rel="stylesheet">
    <link href="/assets/css/colors/blue.css" rel="stylesheet">
    <link href="/assets/css/colors/green-2.css" rel="stylesheet">
    <link href="/assets/css/colors/green.css" rel="stylesheet">
    <link href="/assets/css/colors/red-2.css" rel="stylesheet">
    <link href="/assets/css/colors/red.css" rel="stylesheet">
    <link href="/assets/css/colors/red.css" rel="stylesheet">
    <link href="/assets/css/colors/default-color.css" rel="stylesheet"><!-- alternate style end -->

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/colorbox.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/jquery.colorbox-min.js"></script>
    <style>#loader{display: none}</style>
	<style>#response{display: none}</style>
</head>
<body>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- screen loader start -->
<div class="screen-loader"></div><!-- screen loader end -->
<!-- preload start -->
<div id="preload">
    <!-- preload status start -->
    <div id="preload-status"></div><!-- preload status end -->
</div><!-- preload end -->

<!-- === Header Section === -->
<div id="container">
	<!-- +++ Intro Section ++++ -->
    <section class="intro">
    	<!-- Intro Section Background-image -->
    	<div class="intro-image"></div>
		
		<!-- ====+++ Intro Section Content +++==== -->
		<div class="center-content">
			

			<div class="intro-content text-center">	
				<!-- Logo -->								
				<div class="logo">
					<h2 class="text-logo">S.O.A.P</h2>
				</div><!-- /End logo -->							
				<!-- ==== Main Heading ==== -->												
				<h1 class="intro-title">การประกาศรายชื่อผู้ได้รับรางวัลจากการ<span class="obak">เฝ้าเดี่ยว</span></h1>

				<!-- Spin Clock -->
				<i class="fa fa-clock-o fa-spin fa-4x fa-clock-spin"></i>
				<!--i class="fa fa fa-shopping-bag fa-spin fa-4x fa-clock-spin"></i-->
						
				<!-- ====+++ Countdown Timer +++==== -->						
				<ul class="countdown">
			        <!--li>
			            <span class="days">00</span>
			            <p class="days-ref">days</p>
			        </li>
			        <li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li>
			        <li>
			            <span class="hours">00</span>
			            <p class="hours-ref">hours</p>
			        </li>
			        <li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li>
			        <li>
			            <span class="minutes">00</span>
			            <p class="minutes-ref">minutes</p>
			        </li>
			        <li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li>
			        <li>
			            <span class="seconds">00</span>
			            <p class="seconds-ref">seconds</p>
			        </li-->
			    </ul>							
				
				<!-- ==== Intro Section Sub-Heading ==== -->				
				<div class="intro-subtitle">
					<p>จำนวนผู้เฝ้าเดี่ยวครบทุกวันประจำสัปดาห์ที่ผ่านมาแยกตาม mission บันทึกข้อมูลตั้งแต่วันที่ <?php echo date('d/m/Y',strtotime($week->real_week_start)); ?> ถึง <?php echo date('d/m/Y',strtotime($week->real_week_end)); ?></p>
					<div class="col-sm-offset-1 col-sm-3 col-xs-3"></div>
					<div class="col-sm-offset-1 col-sm-2 col-xs-2">
							<table class="table" style="font-size: 1.8vw">
								<thead>
								<!--tr><td class="text-left">mission</td><td>จำนวน</td></tr-->
								</thead>
								<tbody>
								<?php 
									$total = 0; 
									foreach ($weekcounts as $weekcount) {
									
										$total += $weekcount->amount;	
								?>
									<!--tr><td class="text-left"><?php echo $weekcount->email; ?></td><td class="text-right"><?php echo $weekcount->amount; ?></td></tr-->
								<?php } ?>
								<tr><td class="text-left">รวม</td><td class="text-right"><?php echo $total; ?> คน</td></tr>
								</tbody>
							</table>
					</div>
					<div class="col-sm-offset-1 col-sm-5 col-xs-5"></div>
				</div>							
											
			</div> <!-- /End Intro Section Content -->
		</div>
		<!-- ==== Intro Section Bottom Content ==== -->
		<div class="container-bottom-content">					
			<!-- ==== Social Links ==== -->
			<div class="social">
				<a href="<?php echo base_url(); ?>home/fortune"><i class="fa fa fa-smile-o fa-2x fa-social"></i></a>
				<?php if (!empty($peoplewons)) { ?>
				<a href="<?php echo base_url(); ?>home/clear"><i class="fa fa fa fa-times fa-2x fa-social"></i></a>
				<?php } ?>
			</div> <!-- /End Social Links -->

			<!-- ==== Notify Section ==== -->
			<div class="notify-after text-center">						
				<h2>ป้อนรายชื่อผู้เฝ้าเดี่ยว</h2>
				<p>สำหรับผู้นำโปรดล็อกอินก่อน</p>
				<p class="alert alert-danger" id="response"><b>INVALID USER NAME OR PASSWORD</b></p>
				<form id="frm_login" class="form-inline" role="form" action="<?php echo base_url(); ?>auth/login" method="POST">
					<div class="form-group subscribe-form">							  							  
						<input id="mc-email" type="text" name="username" placeholder="ชื่อผู้ใช้งาน" class="form-control input-label input-notify-after" style="color:#ddd;">
						<br>
						<br>
						<input id="mc-password" type="pasword" name="password" placeholder="รหัสผ่าน" class="form-control input-label input-notify-after" style="color:#ddd;">
						<button type="submit" class="btn btn-default btn-notify-after"><i class="fa fa-send-o"></i></button>
					</div><!-- End email input -->						
					<div class="subscribe_lebel">
						<label for="mc-email"></label>
					</div> 								
				</form>																							
			</div> <!-- /End Notify Section -->	

			<!-- ==== Trigger Button ==== -->										
			<button class="trigger">
				<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
					<g class="icon icon-grid">
						<rect x="32.5" y="5.5" width="22" height="22"/>
						<rect x="4.5" y="5.5" width="22" height="22"/>
						<rect x="32.5" y="33.5" width="22" height="22"/>
						<rect x="4.5" y="33.5" width="22" height="22"/>
					</g>
					<g class="icon icon-cross"-->
						<line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
						<line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
					</g>
				</svg>
				<span>View content</span>
			</button>											
			
		</div> <!-- /End Intro Section Bottom Content -->			
	</section><!-- /end intro section -->

	<!-- +++ Trigger After Content +++ -->
	<section class="content-wrapper">
		<!-- ==== About Section ==== -->
		<div class="about content-div">
			<div class="container padding-x">
				<div class="row text-center">
					<!-- About Section Heading -->
					<!--h2 class="title margin-btm-x">รายชื่อผู้ที่เฝ้าเดี่ยวครบ</h2-->
					<!-- About Section Tagline -->
					<p class="text-center title-tag">รายชื่อต่อไปนี้คือรายชื่อผู้เฝ้าเดี่ยวได้ครบทุกวัน</p>
					<p><?php //do_dump($this->session); ?></p>
					<div class="col-sm-offset-1 col-sm-10 col-xs-12">

				</div>
		 
				<table class="table">
					<thead><tr><th>ID</th><th>ชื่อ-นามสกุล</th><th>Mission</th><th>วันที่</th></tr></thead>
					<tbody id="fillgrid">
					 
					<?php 
					//do_dump($peoples,'peoples');
        foreach ($peoples as $row){
            echo "<tr>
                        <td>$row->id</td>
                        <td class=\"text-left\">$row->name</td>
                        <td class=\"text-left\">$row->email</td>
                        <td>$row->created</td>
                    </tr>";
             
        }
				?>
					
					</tbody>
					<tfoot></tfoot>
				</table>


					</div>
				</div>
			</div>
		</div> <!-- /End About Section -->

        <!-- ==== Footer Section ==== -->
        <footer id="footer" class="content-div">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
        				<div class="copyright">
        					<!-- Copyright Text -->
			        		<p class="text-center">Copyright &copy; 2015. All Rights Reserved COC</p>
			        	</div>
        			</div>
        		</div>
        	</div>		        	
        </footer> <!-- /End Footer Section -->
	</section> <!-- /End Trigger Content -->
</div> 


<!-- jQuery Library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<!-- Modernizer -->
<script src="/assets/js/modernizr.custom.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Classie JS -->
<script src="/assets/js/classie.js"></script>       
<!-- Mailchimp JS Plugin -->
<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Contact Form JS -->
<script src="/assets/js/form-contact.js"></script>
<!-- Nice Scroll JS -->
<script src="/assets/js/jquery.nicescroll.3.5.4.js"></script>
<!-- Plugin Initialization js -->
<script src="/assets/js/plugins.js"></script>
<!-- Custom JS -->
<script src="/assets/js/main.js"></script>
<script>
$(document).ready(function (){


		$("#frm_login").submit(function (e){
			e.preventDefault();
			var url = $(this).attr('action');
			var method = $(this).attr('method');
			var data = $(this).serialize();
			 
			$.ajax({
			   url:url,
			   type:method,
			   data:data
			}).done(function(data){
			   if(data !=='')
				{
					$("#response").show('fast');
					$("#response").effect( "shake" );
					$('#frm_login')[0].reset();
				}
				else
				{
				window.location.href='<?php echo base_url() ?>home/';
				throw new Error('go');
				} 
			});
		});
     
     
     
    function fillgrid(){
        $("#loader").show();
        $.ajax({
            url:'<?php echo base_url() ?>home/fillgrid',
            type:'GET'
        }).done(function (data){
            $("#fillgrid").html(data);
            $("#loader").hide();
            btnedit = $("#fillgrid .btnedit");
            btndelete = $("#fillgrid .btndelete");
            var deleteurl = btndelete.attr('href');
            var editurl = btnedit.attr('href');
            //delete record
            btndelete.on('click', function (e){
                e.preventDefault();
                var deleteid = $(this).data('id');
                if(confirm("are you sure")){
                    $("#loader").show();
                    $.ajax({
                    url:deleteurl,
                    type:'POST' ,
                    data:'id='+deleteid
                    }).done(function (data){
                    $("#response").html(data);
                    $("#loader").hide();
                    fillgrid();
                    });
                }
            });
             
            //edit record
            btnedit.on('click', function (e){
                e.preventDefault();
                var editid = $(this).data('id');
                $.colorbox({
                href:"<?php echo base_url()?>home/edit/"+editid,
                top:50,
                width:500,
                onClosed:function() {fillgrid();}
                });
            });
             
        });
    }
     
            $( "div" ).each(function( index ) {
            var cl = $(this).attr('class');
            if(cl =='')
                {
                    $(this).hide();
                }
            });
});

</script>
</body>
</html>