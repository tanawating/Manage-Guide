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
                                <?php echo form_open('home_enroll/enroll_check');?>
                                <div class="form-horizontal">
                                <div class="panel-body">
                                        <?php if (isset($_SESSION['Error'])) {?>
                                            <div class="alert alert-warning"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['Error'];?></center></div>
                                        <?php }?>
                                        <div class="col-sm-12">
                                            <div class="panel panel-default">
                                                <center><legend><h4>ข้อมูลส่วนตัว</h4></legend></center>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">คำนำหน้า</label>
                                                            <div class="col-sm-2">
                                                                <select class="form-control" id="prefix" name="prefix" >
                                                                    <option value=''>เลือก</option>
                                                                    <option>นาย</option>
                                                                    <option>นางสาว</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ชื่อ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="fristname" name="fristname" placeholder="ชื่อ">
                                                            </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">นามสกุล</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="lastname" name="lastname" placeholder="นามสกุล">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">เลขประจำตัวบัตรประชาชน</label>
                                                            <div class="col-sm-5">
                                                                <input type="number" maxlength=13 class="form-control" data-validation="required" id="identity" name="identity" placeholder="เลขประจำตัวบัตรประชาชน"> <FONT COLOR=blue>เลขประจำตัวบัตรประชาชน 13 หลัก ห้ามมีเครื่องหมาย</FONT>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">เลขประจำตัวบัตรประชาชน กรอกซ้ำ</label>
                                                            <div class="col-sm-5">
                                                                <input type="number" maxlength=13 class="form-control" data-validation="required" id="identity_chk" name="identity_chk" placeholder="เลขประจำตัวบัตรประชาชน">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-4 control-label">วันเกิด</label>
                                                            <div class="col-sm-2">
                                                            <select class="form-control" id="date" name="date" placeholder="วันที่" >
                                                             <option value=''>วันที่</option> 
                                                             <option>1</option>
                                                             <option>2</option>
                                                             <option>3</option>
                                                             <option>4</option>
                                                             <option>5</option>
                                                             <option>6</option>
                                                             <option>7</option>
                                                             <option>8</option>
                                                             <option>9</option>
                                                             <option>10</option>
                                                             <option>11</option>
                                                             <option>12</option>
                                                             <option>13</option>
                                                             <option>14</option>
                                                             <option>15</option>
                                                             <option>16</option>
                                                             <option>17</option>
                                                             <option>18</option>
                                                             <option>19</option>
                                                             <option>20</option>
                                                             <option>21</option>
                                                             <option>22</option>
                                                             <option>23</option>
                                                             <option>24</option>
                                                             <option>25</option>
                                                             <option>26</option>
                                                             <option>27</option>
                                                             <option>28</option>
                                                             <option>29</option>
                                                             <option>30</option>
                                                             <option>31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <select class="form-control" id="month" name="month" >
                                                             <option value=''>เดือน</option> 
                                                             <option>มกราคม</option>
                                                             <option>กุมภาพันธ์</option>
                                                             <option>มีนาคม</option>
                                                             <option>เมษายน</option>
                                                             <option>พฤษภาคม</option>
                                                             <option>มิถุนายน</option>
                                                             <option>กรกฎาคม</option>
                                                             <option>สิงหาคม</option>
                                                             <option>กันยายน</option>
                                                             <option>ตุลาคม</option>
                                                             <option>พฤศจิกายน</option>
                                                             <option>ธันวาคม</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <select class="form-control" id="year" name="year" >
                                                             <option value=''>ปี พ.ศ.</option>
                                                             <option>2530</option>
                                                             <option>2531</option>
                                                             <option>2532</option>
                                                             <option>2533</option>
                                                             <option>2534</option>
                                                             <option>2535</option>
                                                             <option>2536</option>
                                                             <option>2537</option>
                                                             <option>2538</option>
                                                             <option>2539</option>
                                                             <option>2540</option>
                                                             <option>2541</option>
                                                             <option>2542</option>
                                                             <option>2543</option>
                                                             <option>2544</option>
                                                             <option>2545</option>
                                                             <option>2546</option>
                                                             <option>2547</option>
                                                             <option>2548</option>
                                                             <option>2549</option>
                                                             <option>2550</option>
                                                             <option>2550</option>
                                                             <option>2551</option>
                                                             <option>2552</option>
                                                             <option>2553</option>
                                                             <option>2554</option>
                                                             <option>2555</option>
                                                             <option>2556</option>
                                                             <option>2557</option>
                                                             <option>2558</option>
                                                             <option>2559</option>
                                                             <option>2560</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อยู่บ้านเลขที่</label>
                                                            <div class="col-sm-2">
                                                                <input type="number" class="form-control" data-validation="required" id="house_number" name="house_number" placeholder="บ้านเลขที่">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">หมู่ที่</label>
                                                            <div class="col-sm-2">
                                                            <input type="number" class="form-control" data-validation="required" id="moo" name="moo" placeholder="หมู่ที่">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ถนน</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="road" name="road" placeholder="ถนน">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ตำบล</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="district" name="district" placeholder="ตำบล">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อำเภอ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="amphur" name="amphur" placeholder="อำเภอ">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">จังหวัด</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="city" name="city" placeholder="จังหวัด">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
                                                            <div class="col-sm-5">
                                                                <input type="number" class="form-control" data-validation="required" id="phone_number" name="phone_number" placeholder="เบอร์โทรศัพท์"> <FONT COLOR=blue>เบอร์โทรศัพท์ 10 หลัก ห้ามมีเครื่องหมาย</FONT>
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
                                                            <input type="text" class="form-control" data-validation="required" id="name_father" name="name_father" placeholder="ชื่อ-สกุล บิดา">
                                                            </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">ชื่อ-สกุล มารดา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="name_mother" name="name_mother" placeholder="ชื่อ-สกุล มารดา">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">มีพี่น้องร่วมบิดามารดา</label>
                                                            <div class="col-sm-2">
                                                            <input type="number" class="form-control" data-validation="required" id="brethren" name="brethren" placeholder="จำนวนพี่น้อง">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">เป็นบุตรคนที่</label>
                                                            <div class="col-sm-2">
                                                            <input type="number" class="form-control" data-validation="required" id="person_num" name="person_num" placeholder="เป็นบุตรคนที่">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">เบอร์ติดต่อผู้ปกครอง</label>
                                                            <div class="col-sm-5">
                                                            <input type="number" class="form-control" data-validation="required" id="parent_phone_number" name="parent_phone_number" placeholder="เบอร์ติดต่อผู้ปกครอง">
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
                                                        <label for="detail" class="col-sm-4 control-label">ปัจจุบันกำลังศึกษาอยู่ชั้น</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control" id="studying_in_class" name="studying_in_class" >
                                                                    <option>มัทยมศึกษาชั้นปีที่ 6</option>
                                                                    <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
                                                                    <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                                                                </select>
                                                            </div>
                                                    </div>                                                   
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">โปรแกรม/สาขา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_major" name="studying_in_major" placeholder="โปรแกรม/สาขา">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-4 control-label">โรงเรียน/วิทยาลัย ที่กำลังศึกษา</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school" name="studying_in_school" placeholder="โรงเรียน/วิทยาลัย ที่กำลังศึกษา">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">อำเภอ</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school_amphur" name="studying_in_school_amphur" placeholder="อำเภอ">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">จังหวัด</label>
                                                            <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="studying_in_school_city" name="studying_in_school_city" placeholder="จังหวัด">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">คะแนนเฉลี่ยสะสม</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="gpa" name="gpa" placeholder="GPA.">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ขอสมัครเข้าศึกษาระดับ</label>
                                                            <div class="col-sm-5">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="request_major" id="request_major" value="ปริญาตรี ๔ ปี" checked>
                                                                        ปริญาตรี ๔ ปี
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="request_major" id="request_major" value="ปริญาตรี ๔ ปี เทียบเข้าศึกษา">
                                                                    ปริญาตรี ๔ ปี เทียบเข้าศึกษา
                                                                </label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">ปีการศึกษา</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" data-validation="required" id="year_education" name="year_education" value="<?php echo $rs->y_year?>" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">หลักสูตร</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="course" name="course" placeholder="วิทยาศาสตร์บัณฑิต" value="วิทยาศาสตร์บัณฑิต" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">คณะ</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="faculty" name="faculty" placeholder="คณะเทคโนโลยีสารสนเทศ" value="คณะเทคโนโลยีสารสนเทศ" readonly>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">สาขาวิชา</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control" id="major" name="major" >
                                                                    <option>เทคโนโลยีสารสนเทศ</option>
                                                                    <option>เทคโนโลยีคอมพิวเตอร์และการสื่อสาร</option>
                                                                    <option>เทคโนโลยีมัลติมีเดียและแอนิเมชั่น</option>
                                                                    <option>เทคโนโลยีสารสนเทศภูมิศาสตร์</option>
                                                                    <option>การจัดการเทคโนโลยี</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-sm-4 control-label">สถาบัน</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" data-validation="required" id="university" name="university" placeholder="มหาวิทยาลัยราชภัฏมหาสารคาม" value="มหาวิทยาลัยราชภัฏมหาสารคาม" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center><div><FONT COLOR=#FF9900>*กรุณาตรวจสอบข้อมูลอีกครั้ง ก่อนกดปุ่มตรวจสอบข้อมูล!!</FONT></div></center>
                                    <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> ตรวจสอบข้อมูล</button></center>
                                    <br>
                                </div>
                                <?php echo form_close();  ?>
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