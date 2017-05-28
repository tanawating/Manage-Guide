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
                                <span class="glyphicon glyphicon-cloud-upload"></span>
                                <b><FONT SIZE=3>ส่งหลักฐานการสมัคร</FONT></b>                        
                            </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <?php if (isset($_SESSION['Editsucsess'])) {?>
                                            <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['Editsucsess'];?></center></div>
                                        <?php }?>
                                        <center><p><font color="red"><?php echo $this->session->flashdata('err_filename'); ?></font></p></center>
                                        <div class="panel panel-default">
                                            <div class="form-horizontal">
                                            <center><legend><h4>ฟอร์มอัพโหลดส่งหลักฐาน</h4></legend></center>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">เลขบัตรประชาชนที่สมัครเรียน</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" data-validation="required" id="iden" name="iden" readonly="" value="<?php echo $rs->en_identity?>">
                                                        </div>
                                                </div>                                                    
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ชื่อ - นามสกุล</label>
                                                        <div class="col-sm-5">
                                                        <input type="text" class="form-control" data-validation="required" id="name" name="name" readonly="" value="<?php echo $rs->en_prefix .' '. $rs->en_fristname .' '. $rs->en_lastname?>">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="detail" class="col-sm-6 control-label">ปีการศึกษา</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" data-validation="required" id="year" name="year" value="<?php echo $rs->en_year_education ?>" readonly>
                                                        </div>
                                                </div>
                                                <hr>
                                                <form method="post" action="uploadslip" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_slip==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_slip ?>" target="_black"><?php echo $rs->en_slip ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="username" class="col-sm-6 control-label">สลิปโอนเงินค่าสมัครเรียน</label>
                                                    <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file" type="file" name="txtSlip"/> 
                                                    </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                                <hr>
                                                <form method="post" action="uploadedu1" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_edu1==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_edu1 ?>" target="_black"><?php echo $rs->en_edu1 ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="username" class="col-sm-6 control-label">ใบรับรองผลการศึกษา (ปพ.7)</label>
                                                    <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file" type="file" name="txtEdu1"  value="<?php echo $rs->en_edu1?>"/> 
                                                    </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                                <hr>
                                                <form method="post" action="uploadedu2" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_edu2==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_edu2 ?>" target="_black"><?php echo $rs->en_edu2 ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="detail" class="col-sm-6 control-label">ใบหลักสูตรแกนกลางการศึกษาขั้นพื้นฐาน (ปพ.1)</label>
                                                        <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file"  type="file" name="txtEdu2" /> 
                                                        </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                                <hr>
                                                <form method="post" action="uploadhouse" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_house==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_house ?>" target="_black"><?php echo $rs->en_house ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="detail" class="col-sm-6 control-label">สำเนาทะเบียนบ้าน</label>
                                                        <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file" type="file" name="txtHouse" /> 
                                                        </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                                <hr>
                                                <form method="post" action="uploadiden" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_pic_iden==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_pic_iden ?>" target="_black"><?php echo $rs->en_pic_iden ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="detail" class="col-sm-6 control-label">สำเนาบัตรประชาชน</label>
                                                        <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file" type="file" name="txtPic_iden" /> 
                                                        </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                                <hr>
                                                <form method="post" action="uploadme" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-6 control-label">ไฟล์ปัจจุบัน</label>
                                                    <div class="col-sm-5">
                                                        <div><p>
                                                                <?php 
                                                                    if($rs->en_me==''):
                                                                        echo '<font color="red">ไม่มี</font>';
                                                                    else:?>
                                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_me ?>" target="_black"><?php echo $rs->en_me ?></a></p></div>
                                                                <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <label for="detail" class="col-sm-6 control-label">รูปภาพตัวเอง ชุดนักเรียน/นักศึกษา</label>
                                                        <div class="col-sm-5">
                                                        <input class="btn btn-default btn-file" type="file" name="txtMe" /> 
                                                        </div>
                                                        <input name ="en_id" type="hidden" id="en_id" value="<?php echo $rs->en_id?>" />
                                                </div>
                                                <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save-file"></span> อัพโหลด</button></center>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <center><div><FONT COLOR=#FF9900>*กรณีหลักฐานไม่ครบ ให้อัพโหลดเฉพาะในส่วนที่มี!!</FONT></div></center>
                                <center><div><FONT COLOR=#FF9900>*ทุกรูปภาพต้องเป็นภาพที่ชัด เพราะจะง่ายในการตรวจสอบ!!</FONT></div></center>
                                <center><div><FONT COLOR=#FF9900>*กรุณาตรวจสอบข้อมูลให้ละเอียด ก่อนบันทึกข้อมูล!!</FONT></div></center>
                                <br>
                                <center>
                                    <a 
                                        type="button" class="btn btn-danger" href="<?php echo base_url();?>home_evidence/logout" role="button " >
                                        <span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ
                                    </a> 
                                </center>
                                <br>
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