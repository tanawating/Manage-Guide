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
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <b><FONT SIZE=3>ตารางออกแนะแนว</FONT></b>                        
                        </div>
                        <div class="panel-body">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>วันที่</th>
                                        <th>เวลา</th>
                                        <th>โรงเรียน</th>
                                        <th>อาจารย์ที่ออกแนะแนว</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    function DateThai($strDate)
                                    {              
                                        $strYear = date("Y",strtotime($strDate))+543;
                                        $strMonth= date("n",strtotime($strDate));
                                        $strDay= date("j",strtotime($strDate));
                                        $strMonthCut = Array("","มกราคม.","กุมภาพันธ์.","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
                                        $strMonthThai=$strMonthCut[$strMonth];
                                        return "$strDay $strMonthThai $strYear";
                                    }
                                ?>
                                    <?php if(count($rs)>0):?>
                                        <?php foreach ($rs as $r):?>
                                        <?php $strDate = $r->g_date ?>
                                            <tr>
                                                <td><?php echo DateThai($strDate)?></td>
                                                <td><?php echo $r->time ?> น.</td>
                                                <td><a href="<?php echo site_url().'home/school/'.$r->sch_id;?>"> <?php echo $r->sch_name ?></a></td>
                                                <td><a href="<?php echo site_url().'home/teacher/'.$r->tc_id;?>"> <?php echo $r->tc_name.' '. $r->tc_lastname ?></a></td>
                                                <td><?php echo $r->g_detail ?></td>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                            </tr>
                                </tbody>
                            </table>

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