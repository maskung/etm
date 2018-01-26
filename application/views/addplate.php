  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container">
      <h2>รถที่ใช้วันนี้<h2>
      <!--Intro-->
      <?php if ($defaultcar != null) { ?>
      <h3><?php echo $defaultcar->Brand;?> สี <?php echo $defaultcar->Color; ?> ทะเบียน <?php echo $defaultcar->Text.' '.$defaultcar->Province; ?></h3>
      <?php } else { ?>
      <h3>ยังไม่ได้เลือกรถ</h3>
      <?php } ?>

      <div class="block-border-bottom">
        <h3 class="block-title">
            รถที่มีในระบบ
          </h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>ยี่ห้อ</th>
              <th>สี</th>
              <th>ทะเบียน</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $i = 1;
            foreach ($usercars as $usercar) { ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $usercar->Brand; ?></td>
              <td><?php echo $usercar->Color; ?></td>
              <td><?php echo $usercar->Text; ?></td>
            </tr>
            <?php $i++;
             } ?>

          </tbody>
        </table>
      </div>
      <div class="block block-border-bottom">
            <?php echo form_open('/home/addplateprocess', array('class'=>'jsform')); ?>

            <div class="col-sm-6 ">
              <select id="brand" class="form-control brandcar" name="brandcar">
              <option value="0">----- กรุณาเลือกยี่ห้อ----</option>
              <option value="ALFA ROMEO" data-name="ALFA ROMEO ">ALFA ROMEO </option>
              <option value="ASTON MARTIN" data-name="ASTON MARTIN ">ASTON MARTIN </option>
              <option value="AUDI" data-name="AUDI ">AUDI </option>
              <option value="BENTLEY" data-name="BENTLEY">BENTLEY</option>
              <option value="BENZ" data-name="BENZ">BENZ</option>
              <option value="BMW" data-name="BMW">BMW</option>
              <option value="BUICK" data-name="BUICK">BUICK</option>
              <option value="CADILLAC" data-name="CADILLAC">CADILLAC</option>
              <option value="CHERY" data-name="CHERY">CHERY</option>
              <option value="CHEVROLET" data-name="CHEVROLET">CHEVROLET</option>
              <option value="CHRYSLER" data-name="CHRYSLER">CHRYSLER</option>
              <option value="CITROEN" data-name="CITROEN">CITROEN</option>
              <option value="DAEWOO" data-name="DAEWOO">DAEWOO</option>
              <option value="DAIHATSU" data-name="DAIHATSU">DAIHATSU</option>
              <option value="DATSUN" data-name="DATSUN">DATSUN</option>
              <option value="DEVA" data-name="DEVA">DEVA</option>
              <option value="DFSK" data-name="DFSK">DFSK</option>
              <option value="DODGE" data-name="DODGE">DODGE</option>
              <option value="FERRARI" data-name="FERRARI">FERRARI</option>
              <option value="FIAT" data-name="FIAT">FIAT</option>
              <option value="FORD" data-name="FORD">FORD</option>
              <option value="FOTON" data-name="FOTON">FOTON</option>
              <option value="GMC" data-name="GMC">GMC</option>
              <option value="HINO" data-name="HINO">HINO</option>
              <option value="HOLDEN" data-name="HOLDEN">HOLDEN</option>
              <option value="HONDA" data-name="HONDA">HONDA</option>
              <option value="HUMMER" data-name="HUMMER">HUMMER</option>
              <option value="HYUNDAI" data-name="HYUNDAI">HYUNDAI</option>
              <option value="ISUZU" data-name="ISUZU">ISUZU</option>
              <option value="JAGUAR" data-name="JAGUAR">JAGUAR</option>
              <option value="JEEP" data-name="JEEP">JEEP</option>
              <option value="KIA" data-name="KIA">KIA</option>
              <option value="LAMBORGHINI" data-name="LAMBORGHINI">LAMBORGHINI</option>
              <option value="LANCIA" data-name="LANCIA">LANCIA</option>
              <option value="LANDROVER" data-name="LANDROVER">LANDROVER</option>
              <option value="LEXUS" data-name="LEXUS">LEXUS</option>
              <option value="LINCOLN" data-name="LINCOLN">LINCOLN</option>
              <option value="LOTUS" data-name="LOTUS">LOTUS</option>
              <option value="MASERATI" data-name="MASERATI">MASERATI</option>
              <option value="MAZDA" data-name="MAZDA">MAZDA</option>
              <option value="MERCURY" data-name="MERCURY">MERCURY</option>
              <option value="MG" data-name="MG">MG</option>
              <option value="MINI" data-name="MINI">MINI</option>
              <option value="MITSUBISHI" data-name="MITSUBISHI ">MITSUBISHI </option>
              <option value="MITSUOKA" data-name="MITSUOKA">MITSUOKA</option>
              <option value="NAZA" data-name="NAZA">NAZA</option>
              <option value="NISSAN" data-name="NISSAN">NISSAN</option>
              <option value="OLDSMOBILE" data-name="OLDSMOBILE">OLDSMOBILE</option>
              <option value="OPEL" data-name="OPEL">OPEL</option>
              <option value="PEUGEOT" data-name="PEUGEOT">PEUGEOT</option>
              <option value="PONTIAC" data-name="PONTIAC">PONTIAC</option>
              <option value="PORSCHE" data-name="PORSCHE">PORSCHE</option>
              <option value="PROTON" data-name="PROTON">PROTON</option>
              <option value="RENAULT" data-name="RENAULT">RENAULT</option>
              <option value="ROLLS-ROYCE" data-name="ROLLS-ROYCE">ROLLS-ROYCE</option>
              <option value="ROVER" data-name="ROVER">ROVER</option>
              <option value="SAAB" data-name="SAAB">SAAB</option>
              <option value="SEAT" data-name="SEAT">SEAT</option>
              <option value="SKODA" data-name="SKODA">SKODA</option>
              <option value="SMART" data-name="SMART">SMART</option>
              <option value="SOKON" data-name="SOKON">SOKON</option>
              <option value="SSANGYONG" data-name="SSANGYONG">SSANGYONG</option>
              <option value="SUBARU" data-name="SUBARU">SUBARU</option>
              <option value="SUZUKI" data-name="SUZUKI">SUZUKI</option>
              <option value="TATA" data-name="TATA">TATA</option>
              <option value="THAI RUNG" data-name="THAI RUNG">THAI RUNG</option>
              <option value="TOYOTA" data-name="TOYOTA">TOYOTA</option>
              <option value="VOLKSWAGEN" data-name="VOLKSWAGEN">VOLKSWAGEN</option>
              <option value="VOLVO8" data-name="VOLVO">VOLVO</option>
              <option value="WULING" data-name="WULING">WULING</option>
            </select>
            </div>
            <div class="col-sm-6">
              <select id="color" class="form-control color-car" name="colorcar">
                <option value="0">----- กรุณาเลือกสี----</option>
              <option value="ขาว" data-name="ขาว">ขาว</option>
              <option value="ดำ" data-name="ดำ">ดำ</option>
              <option value="ทอง" data-name="ทอง">ทอง</option>
              <option value="เทา" data-name="เทา">เทา</option>
              <option value="เขียว" data-name="เขียว">เขียว</option>
              <option value="ส้ม" data-name="ส้ม">ส้ม</option>
              <option value="เหลือง" data-name="เหลือง">เหลือง</option>
              <option value="เขียว" data-name="เขียว">เขียว</option>
              <option value="น้ำเงิน" data-name="น้ำเงิน">น้ำเงิน</option>
              <option value="ม่วง" data-name="ม่วง">ม่วง</option>
              <option value="แดง" data-name="แดง">แดง</option>
              <option value="น้ำตาล" data-name="น้ำตาล">น้ำตาล</option>
              <option value="ชมพู" data-name="ชมพู">ชมพู</option>

              </select>
            </div>
            <div class="col-sm-6">
              <input type="text" name="plate" value="">
            </div>
            <div class="col-sm-6">
                <input type="submit" name="" value="เพิ่มรถในระบบ">
            </div>


            <?php echo form_close(); ?>
      </div>
    </div>
  </div>
