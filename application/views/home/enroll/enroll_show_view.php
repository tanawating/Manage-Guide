
<?php 

        //ข้อมูลสว่นตัว
        $prefix = $_REQUEST['prefix']; //คำนำหน้า
        $fristname = $_REQUEST['fristname']; //ชื่อจริง
        $lastname = $_REQUEST['lastname']; //นามสกุล
        $identity = $_REQUEST['identity']; //เลขบัตรประชาชน
        $identity_chk = $_REQUEST['identity_chk'];
        $date = $_REQUEST['date']; //บัตรประจำวันประชาชน
        $month = $_REQUEST['month']; //บัตรประจำวันประชาชน
        $year = $_REQUEST['year']; //บัตรประจำวันประชาชน
        $house_number = $_REQUEST['house_number']; //บ้านเลขที่
        $moo = $_REQUEST['moo']; //หมู่ที่
        $road = $_REQUEST['road']; //ถนน
        $district = $_REQUEST['district']; //ตำบล
        $amphur = $_REQUEST['amphur']; //อำเภอ
        $city = $_REQUEST['city']; //จังหวัด
        $phone_number = $_REQUEST['phone_number']; //เบอร์โทรศัพท์
        
        //ข้อมูลผู้ปกครอง
        $name_father = $_REQUEST['name_father']; //ชื่อ-สกุล พ่อ
        $name_mother = $_REQUEST['name_mother']; //ชื่อ-สกุล แม่
        $brethren = $_REQUEST['brethren']; //จำนวนพี่น้อง
        $person_num = $_REQUEST['person_num']; //เป็นบุตรคนที่
        $parent_phone_number = $_REQUEST['parent_phone_number']; //เบอร์ติดต่อผู้ปกครอง
        
        //ข้อมูลการศึกษา
        $studying_in_class = $_REQUEST['studying_in_class']; //ปัจจุบันกำลังศึกษาอยู่ชั้น
        $studying_in_major = $_REQUEST['studying_in_major']; //โปรแกรม/สาขา
        $studying_in_school = $_REQUEST['studying_in_school']; //โรงเรียน/วิทยาลัย ที่กำลังศึกษา
        $studying_in_school_amphur = $_REQUEST['studying_in_school_amphur']; //อำเภอ
        $studying_in_school_city = $_REQUEST['studying_in_school_city']; //จังหวัด
        $gpa = $_REQUEST['gpa']; //gpa
        $year_education = $_REQUEST['year_education']; //ปีการศึกษา
        $request_major = $_REQUEST['request_major']; //ขอสมัครเข้าศึกษาระดับ
        $course = $_REQUEST['course']; //หลักสูตร
        $faculty = $_REQUEST['faculty']; //คณะ
        $major = $_REQUEST['major']; //สาขาวิชา
        $university = $_REQUEST['university']; //สถาบัน
        
        if($prefix == '')
            {
                echo "<script>alert('กรุณาเลือกคำนำหน้า !!');history.back();</script>";
                exit(); 
            }
        elseif (strlen($identity) !=13 ) 
            {
                echo "<script>alert('เลขบัตรประชาชนไม่ถูกต้อง !!');history.back();</script>";
                exit();   
            } 
        elseif ($identity != $identity_chk) 
            {
                echo "<script>alert('เลขบัตรประชาชนกรอกไม่ตรงกัน !!');history.back();</script>";
                exit(); 
            }
        elseif ($date == '' || $month == '' || $year == '' ) 
            {
                echo "<script>alert('กรุณาเลือก วัน/เดือน/ปี เกิด !!');history.back();</script>";
                exit(); 
            }
        elseif (strlen($phone_number) !=10 ) 
            {
                echo "<script>alert('เบอร์โทรศัพท์ไม่ถูกต้อง !!');history.back();</script>";
                exit();   
            } 

        
        
?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <?php require 'separate/home/head.php';?>
        <!-- form_validator -->
            <script src="<?php echo base_url();?>assets/form_validator/jquery.min.js"></script>
            <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/jquery.form.validator.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/security.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/file.js"></script>
            <script src="<?php echo base_url();?>assets/scroll_top/scrolltopcontrol.js"></script>
    </head>
    <body>

    <!-- herder -->
        <div class="container">
            <?php require 'separate/home/herder.php';?>
        </div>
    <!-- herder -->
    <!-- body -->
        <div class="container" >
            <div class="row">
                
                <div class="col-md-3">
                    <div class="thumbnail" style="height: auto!important;">
                                
                        <!-- ฟอร์ม ระบบสมาชิก-->
                            <?php require 'separate/home/system_member.php';?>
                        
                        <!-- ฟอร์ม เมนูหลัก-->
                            <?php require 'separate/home/main_menu.php';?>
                                
                        <!-- ฟอร์ม เกี่ยวกับ สาขา-->
                            <?php require 'separate/home/about_major.php';?>
                    </div> 
                </div> 
                       
                <div class="col-md-9">
                    <div class="thumbnail" style="height: auto!important;">
                                
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    <b><FONT SIZE=3>สมัครเรียน (โค้วตารับตรง)</FONT></b>                        
                                </div>
                                <?php echo form_open('home_enroll/save');?>
                                <div class="form-horizontal">
                                <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <center><legend><h4>ข้อมูลส่วนตัว</h4></legend></center>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">คำนำหน้า</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="prefix" name="prefix" style="color: #3300FF" value="<?php echo $prefix ?>" readonly>
                                                            </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ชื่อ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="fristname" name="fristname" style="color: #3300FF" value="<?php echo $fristname  ?>" readonly>
                                                            </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">นามสกุล</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="lastname" name="lastname" style="color: #3300FF" value="<?php echo $lastname  ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">เลขประจำตัวบัตรประชาชน</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="identity" name="identity" style="color: #3300FF" value="<?php echo $identity ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">วันเกิด</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="birthday" name="birthday" style="color: #3300FF" value="<?php echo $date. ' ', $month. ' ' , $year ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อยู่บ้านเลขที่</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="house_number" name="house_number" style="color: #3300FF" value="<?php echo $house_number ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">หมู่ที่</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="moo" name="moo" style="color: #3300FF" value="<?php echo $moo ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ถนน</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="road" name="road" style="color: #3300FF" value="<?php echo $road ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ตำบล</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="district" name="district" style="color: #3300FF" value="<?php echo $district ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อำเภอ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="amphur" name="amphur" style="color: #3300FF" value="<?php echo $amphur ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">จังหวัด</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="city" name="city" style="color: #3300FF" value="<?php echo $city ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="phone_number" name="phone_number" style="color: #3300FF" value="<?php echo $phone_number ?>" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <center><legend><h4>ข้อมูลครอบครัว</h4></legend></center>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ชื่อ-สกุล บิดา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="name_father" name="name_father" style="color: #3300FF" value="<?php echo $name_father ?>" readonly>
                                                            </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ชื่อ-สกุล มารดา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="name_mother" name="name_mother" style="color: #3300FF" value="<?php echo $name_mother ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">มีพี่น้องร่วมบิดามารดา</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="brethren" name="brethren" style="color: #3300FF" value="<?php echo $brethren ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">เป็นบุตรคนที่</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="person_num" name="person_num" style="color: #3300FF" value="<?php echo $person_num  ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">เบอร์ติดต่อผู้ปกครอง</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="parent_phone_number" name="parent_phone_number" style="color: #3300FF" value="<?php echo $parent_phone_number ?>" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <center><legend><h4>ข้อมูลการศึกษา</h4></legend></center>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ปัจจุบันกำลังศึกษาอยู่ชั้น</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_class" name="studying_in_class" style="color: #3300FF" value="<?php echo $studying_in_class ?>" readonly>
                                                            </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">โปรแกรม/สาขา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_major" name="studying_in_major" style="color: #3300FF" value="<?php echo $studying_in_major ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">โรงเรียน/วิทยาลัย ที่กำลังศึกษา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school" name="studying_in_school" style="color: #3300FF" value="<?php echo $studying_in_school ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อำเภอ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school_amphur" name="studying_in_school_amphur" style="color: #3300FF" value="<?php echo $studying_in_school_amphur ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">จังหวัด</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school_city" name="studying_in_school_city" style="color: #3300FF" value="<?php echo $studying_in_school_city ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">คะแนนเฉลี่ยสะสม</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="gpa" name="gpa" style="color: #3300FF" value="<?php echo $gpa ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ขอสมัครเข้าศึกษาระดับ</label>
                                                            <div class="col-sm-4">
                                                            <input type="text" class="form-control" data-validation="required" id="request_major" name="request_major" style="color: #3300FF" value="<?php echo $request_major ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ปีการศึกษา</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" data-validation="required" id="year_education" name="year_education" style="color: #3300FF" value="<?php echo $year_education ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">หลักสูตร</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="course" name="course" style="color: #3300FF" value="<?php echo $course ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">คณะ</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="faculty" name="faculty" style="color: #3300FF" value="<?php echo $faculty ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">สาขาวิชา</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="major" name="major" style="color: #3300FF" value="<?php echo $major ?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">สถาบัน</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="university" name="university" style="color: #3300FF" value="<?php echo $university ?>" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center><div><FONT COLOR=#FF9900>*เมื่อกดปุ่มบันทึกข้อมูลแล้วจะไม่สามารถกลับมาแก้ไขข้อมูลได้อีก ดังนั้นตรวจสอบข้อมูลการสมัครให้ถูกต้องกดก่อนบันทึก</FONT></div></center>
                                    <center>
                                        <a onclick='window.history.back()' class="btn btn-warning" role="button"><span class="glyphicon glyphicon-backward"></span> กลับเพื่อแก้ไขข้อมูล</a>
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึกข้อมูล</button>
                                    </center>
                                    <br>
                                 </div>
                                <?php echo form_close();?>
                            </div>
                    </div> 
                </div>
                
            </div>   
        </div>
    <!-- end body -->

    <!-- footer -->
 
            <?php require 'separate/home/footer.php';?>

    <!-- footer --> 

    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 
    
    </body>
</html>