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
                                <span class="glyphicon glyphicon-log-in"></span>
                                <b><FONT SIZE=3>เข้าสู่ระบบเพื่อส่งหลักฐานการสมัครเรียน</FONT></b>                        
                            </div>
                                <br>
                            <center>

                                <table class="table table-bordered" style="width: 65%">
                                    <tbody>
                                            <td>
                                                <center>
                                                <?php echo form_open('login_check/student');?>
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label">เลขบัตรประชาชน</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" data-validation="required" name="txtIden" placeholder="เลขบัตรประชาชน">
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" data-validation="required" name="txtTel" placeholder="เบอร์โทรศัพท์">
                                                                </div>
                                                        </div>
                                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> ส่งหลักฐาน</button>   
                                                    </div>
                                                <?php form_close();?>
                                                 <?php if (isset($_SESSION['errorStudent'])) {?>
                                                    <center><br><p class="login-box-msg" style="color:red;"><?php echo $_SESSION['errorStudent'];?> </p></center>
                                                <?php } ?> 
                                                </center> 
                                            </td>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-bordered" style="width: 65%">
                                            <thead>
                                                <tr>
                                                    <th><center><b><FONT SIZE=3 COLOR=blue> <span class="glyphicon glyphicon-star"></span> หลักฐานที่ต้องใช้ในการยืนยันการสมัครเรียน</FONT></b></center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <td>

                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. สลิปหรือหลักฐานการโอนเงิน</FONT></div>
                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ใบรับรองผลการศึกษา (ปพ.7)</FONT></div>
                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. ใบหลักสูตรแกนกลางการศึกษาขั้นพื้นฐาน (ปพ.1)</FONT></div>
                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. สำเนาทะเบียนบ้าน</FONT></div>
                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. สำเนาบัตรประชาชน</FONT></div>
                                                        <div><FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. รูปภาพตัวเอง ชุดนักเรียน/นักศึกษา</FONT></div>
                                                        <hr>
                                                        <center><div><FONT COLOR=red> *ในกรณีหลักฐานไม่ครบ ให้อัพโหลดเฉพาะในส่วนที่มี </FONT></div></center>
                                                    </td>
                                            </tbody>
                                </table>
                                <hr>
                                <table class="table table-bordered" style="width: 65%">
                                            <thead>
                                                <tr>
                                                    <th><center><b><FONT SIZE=3 COLOR=blue> <span class="glyphicon glyphicon-star"></span> จ่ายค่าสมัครเรียนได้โดยโอนเงินผ่านบัญชีธนาคาร</FONT></b></center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <td>
                                                        <center><img src="<?php echo base_url();?>image/ktb.jpg" class="img-thumbnail" alt="Cinque Terre" width="50" border="0"/>
                                                        <div><FONT COLOR=#009cd9> เลขบัญชี xxx-x-xxxxx-x </FONT></div>
                                                        <div><FONT COLOR=#009cd9> ชื่อบัญชี สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏมหาสารคาม </FONT></div>
                                                    <hr>
                                                        <div><FONT COLOR=red> *โปรดเก็บ สลิปหรือหลักฐานการโอนเงิน เพื่อใช้ยืนยันการชำระค่าสมัคร </FONT></div></center>
                                                    </td>
                                            </tbody>
                                </table>
                                <br>
                            </center>
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