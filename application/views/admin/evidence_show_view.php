<!DOCTYPE html>
<html lang="th">
<head>
        
    <!-- herd -->

        <?php require 'separate/home/head.php';?>
            <script src="<?php echo base_url();?>assets/form_validator/jquery.min.js"></script>
            <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/jquery.form.validator.min.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/security.js"></script>
            <script src="<?php echo base_url();?>assets/form_validator/file.js"></script>
            <script src="<?php echo base_url();?>assets/scroll_top/scrolltopcontrol.js"></script>
            <link href="<?php echo base_url();?>/assets/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
            <script src="<?php echo base_url();?>assets/datetimepicker/jquery.datetimepicker.js"></script>

    <!-- herd -->
        
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
                
                <div class="col-md-2">
       
                        <!-- main_menu-->
                            <?php require 'separate/admin/main_menu.php';?>

                </div> 
                       
                <div class="col-md-10">
                    <div class="thumbnail" style="height: auto!important;">
                                
                        <!-- content -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-eye-open"></span><FONT SIZE=3><b> ตรวจสอบหลักฐานการสมัครเรียน</b></FONT>
                            </div>
                            <div class="panel-body">
                            <?php if (isset($_SESSION['successEdit'])) {?>
                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successEdit'];?></center></div>
                            <?php }?>
                                <form name="frmaddadmin"  method="post" action="../editstatus" class="form-horizontal">
                                    <label for="username" class="col-sm-5 control-label">สถานะการสมัคร</label>
                                        <div class="col-sm-2">
                                        <select class="form-control" id="status" name="status" >

                                                 <?php if ($rs->en_status === 'รอตรวจสอบ')
                                                 {?>
                                            <option>รอตรวจสอบ</option>
                                                    <option>ผ่าน</option> 

                                                 <?php } else { ?>
                                                    <option>ผ่าน</option> 
                                                     <option>รอตรวจสอบ</option> 

                                                   <?php  } ?>

                                            </select>
                                        </div>
                                    <input name ="en_id" type="hidden" id="en_id" value="<?PHP echo $rs->en_id?>" />
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> บันทึก</button>
                                </form>

                                <hr>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >เลขที่สมัคร</th>
                                            <td><?php echo $rs->en_id ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >ชื่อ - นามสกุล</th>
                                            <td><?php echo $rs->en_prefix ?> <?php echo $rs->en_fristname ?> <?php echo $rs->en_lastname ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >เลขประจำตัวบัตรประชาชน</th>
                                            <td><?php echo $rs->en_identity?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >สลิปโอนเงินค่าสมัครเรียน</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_slip ?>" target="_black"><?php echo $rs->en_slip ?></a></p></div>
                                                <?php endif;?> 
                                            </td>  
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >ใบรับรองผลการศึกษา (ปพ.7)</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_edu1 ?>" target="_black"><?php echo $rs->en_edu1 ?></a></p></div>
                                                <?php endif;?>                                             
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >ใบหลักสูตรแกนกลางการศึกษาขั้นพื้นฐาน (ปพ.1)</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_edu2 ?>" target="_black"><?php echo $rs->en_edu2 ?></a></p></div>
                                                <?php endif;?> 
                                            </td>                                                         
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >สำเนาทะเบียนบ้าน</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_house ?>" target="_black"><?php echo $rs->en_house ?></a></p></div>
                                                <?php endif;?> 
                                            </td>                                                          
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >สำเนาบัตรประชาชน</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_pic_iden ?>" target="_black"><?php echo $rs->en_pic_iden ?></a></p></div>
                                                <?php endif;?> 
                                            </td>                                                       
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 40%;text-align:right;" >รูปภาพตัวเอง ชุดนักเรียน/นักศึกษา</th>
                                            <td>
                                                <?php 
                                                    if($rs->en_slip==''):
                                                        echo '<font color="red">ไม่มี</font>';
                                                    else:?>
                                                        <div><p><a href="<?php echo base_url();?>fileupload/evidence/<?php echo $rs->en_me ?>" target="_black"><?php echo $rs->en_me ?></a></p></div>
                                                <?php endif;?> 
                                            </td>                                                          
                                        </tr>
                                    </thead>
                                </table>
                                <center>        
                                    <button class="btn btn-danger" onClick = "window.close()"><span class="glyphicon glyphicon-remove"></span> ปิดหน้าต่าง </button> 
                                </center>
    
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>       

    <!-- footer -->
 
            <?php require 'separate/home/footer.php';?>

    <!-- footer -->
    <script>
        $('.trash').click(function(){
            var id=$(this).data('id');
            $('#modalDelete').attr('href','remove/'+id);
        })
    </script>
    
    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 

</body>
</html>

