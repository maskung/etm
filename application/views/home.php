  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container">
      <!--Intro-->
      <?php if ($defaultcar != null) { ?>
      <h3><?php echo $defaultcar->Brand;?> สี <?php echo $defaultcar->Color; ?> ทะเบียน <?php echo $defaultcar->Text.' '.$defaultcar->Province; ?></h3>
      <?php } else { ?>
      <h3>ยังไม่ได้เลือกรถ</h3>
      <?php } ?>


      <div class="block-border-bottom">


          <div class="traffic-cone">
            <img id="cone-pic" src="">
          </div>
          <div id="traffic-text" class="status-traffic-text">
          </div>

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

  <script type="text/javascript">
    $(document).ready(function() {
      // ajax auto refresh use for grab the cone status and display the correct cone
      var callAjax = function(){
          $.ajax({
            method:'get',
            url:'/index.php/home/studentchecked/<?php echo $userdetail->Parent_ID; ?>',
            success:function(data){
              // change color status of cone
              if (data == 1) {
                console.log('ready');
                $('#cone-pic').attr('src', '/assets/img/traffic_cone_light_green.png');
                $('#traffic-text').html('นักเรียนพร้อมแล้ว');
                $('#traffic-text').css('color','#3c763d');
              } else {
                console.log('not yet');
                $('#cone-pic').attr('src', '/assets/img/traffic_cone_light_red.png');
                $('#traffic-text').html('นักเรียนยังไม่พร้อม');
                $('#traffic-text').css('color','#faa');
              }
            }
          });
        }
      setInterval(callAjax,5000);


    });

  </script>
