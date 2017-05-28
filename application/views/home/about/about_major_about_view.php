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
                                <center><b><FONT SIZE=3>เกี่ยวกับสาขาฯ</FONT></b></center>                   
                            </div>
                                <div class="panel-body">

                                <div class="panel panel-default"><br>
                                    <center>
                                        <center><img src="<?php echo base_url(); ?>image/SmartIT.png" class="img-thumbnail" alt="Cinque Terre" width="250" border="0"/></center>
                                    </center>
                                    <br><h4>
                                        <center><b>ปณิธาน ปรัชญา วิสัยทัศน์ พันธกิจ และวัตถุประสงค์</b> <br></center>
                                        <br>
                                        <br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>๑. ปณิธาน</b><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อผลิตบัณฑิตที่มีความรู้ทางด้านเทคโนโลยีสารสนเทศ สามารถประยุกต์งานด้านโปรแกรม  การสื่อสารข้อมูล และการบริหารเทคโนโลยีสารสนเทศ สามารถสื่อสารและทำงานร่วมกับผู้อื่นในองค์กรได้อย่างมีประสิทธิภาพ<br><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>๒.  ปรัชญา</b><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          เพื่อผลิตบัณฑิตที่มีความรู้ทางด้านเทคโนโลยีสารสนเทศ สามารถประยุกต์งานด้านโปรแกรมการสื่อสารข้อมูล และการบริหารเทคโนโลยีสารสนเทศ สามารถสื่อสารและทำงานร่วมกับผู้อื่นในองค์กรได้อย่างมีประสิทธิภาพ<br><br>
                                        
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>๓.  วิสัยทัศน์</b><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พัฒนาสู่องค์กรแห่งการเรียนรู้  มุ่งสู่การผลิตบัณฑิตที่มีความรู้คู่คุณธรรม  เป็นผู้นำด้านบริการวิชาการ สร้างงานวิจัยอย่างมีคุณค่า พัฒนาชุมชนและท้องถิ่นด้านเทคโนโลยีสารสนเทศ<br><br>
                                        
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>๔. พันธกิจ</b><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผลิตบัณฑิตที่มีความรู้ มีคุณธรรมจริยธรรม ให้มีความสามารถเป็นผู้นำทางวิชาการเพื่อช่วยพัฒนาสังคม ชุมชน สิ่งแวดล้อมและธรรมชาติให้เกิดการพัฒนาแบบยั่งยืน<br><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>๕. วัตถุประสงค์</b><br>

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อผลิตบัณฑิตที่มีความรู้ทางด้านเทคโนโลยีสารสนเทศ สามารถประยุกต์งานด้านโปรแกรม  การสื่อสารข้อมูล และการบริหารเทคโนโลยีสารสนเทศ สามารถสื่อสารและทำงานร่วมกับผู้อื่นในองค์กรได้อย่างมีประสิทธิภาพ<br><br>
                                        
                                        </h4>
                                </div>       
                                                
                            </div> 
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