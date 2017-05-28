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
                                            <div class="pull-right action-buttons">
                                                <div class="btn-group pull-right">
                                                    <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#add"> <span class="glyphicon glyphicon-plus-sign">เพิ่มตารางแนะแนว</button>
                                                </div>
                                            </div>
                                            <span class="glyphicon glyphicon-cog"></span><FONT SIZE=3><b> จัดการตารางออกแนะแนว</b></FONT>
                                        </div>
                                        <div class="panel-body">

                                            <div id="add" class="collapse">    
                                                <div class="panel panel-primary">
                                                    <div class="panel-body">

                                                        <form name="frmaddadmin"  method="post" action="add" class="form-horizontal">
                                                            <input type="hidden" name="txtYearEdu" value="<?php echo $rsYearEdu -> y_year ?>">
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">วันที่ออกแนะแนว</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" class="form-control" name="txtDate" value="" id="startdate" data-validation="required" placeholder="วันที่">
                                                                    <script type="text/javascript">
                                                                        jQuery('#startdate').datetimepicker({
                                                                            lang:'th',
                                                                            timepicker:false,
                                                                            format:'Y-m-d'
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">เวลา</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" class="form-control" name="txtTime" value="" placeholder="เวลา" id="startdate2" data-validation="required" >
                                                                    <script type="text/javascript">
                                                                        jQuery('#startdate2').datetimepicker({
                                                                            lang:'th',
                                                                            datepicker:false,
                                                                            format: 'H:i'
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">โรงเรียน</label>
                                                                    <div class="col-sm-6">
                                                                         <select class="form-control" data-validation="required" name="txtSchool">
                                                                            <option value="">เลือกโรงเรียน</option>
                                                                    <?php if(count($rsSchool)>0):?>
                                                                        <?php foreach ($rsSchool as $rSchool):?>
                                                                            <option value="<?php echo $rSchool->sch_id ?>"><?php echo $rSchool->sch_name ?></option>
                                                                        <?php endforeach;?>
                                                                    <?php endif; ?>
                                                                        </select>  
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-sm-4 control-label">อาจารย์ออกแนะแนว</label>
                                                                    <div class="col-sm-6">
                                                                         <select class="form-control" data-validation="required" name="txtTeacher">
                                                                            <option value="">เลือกอาจารย์</option>
                                                                    <?php if(count($rsTeacher)>0):?>
                                                                        <?php foreach ($rsTeacher as $rTeacher):?>
                                                                            <option value="<?php echo $rTeacher->tc_id ?>"><?php echo $rTeacher->tc_name  .' '. $rTeacher->tc_lastname ?></option>
                                                                        <?php endforeach;?>
                                                                    <?php endif; ?>
                                                                        </select>  
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="detail" class="col-sm-4 control-label">รายละเอียด</label>
                                                                    <div class="col-sm-6">
                                                                        <textarea class="form-control" rows="6" name="txtDetail" placeholder="รายละเอียดต่างๆ" ></textarea>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-5 col-sm-4">
                                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> บันทึก</button>    
                                                                </div>
                                                            </div>
                                                        </form>
    
                                                    </div>
                                                </div>
                                            </div>

                                            <form class="form-inline" method="post" action="edityear" >
                                                <div class="form-group">
                                                    <label for="textsearch" >กำหนดปี พ.ศ.</label>
                                                        <input  type="text" name="txtYear" id="itemname" value="<?php echo $rsYear->yg_name ?>" class="form-control" placeholder="" autocomplete="off">
                                                </div>
                                                <button type="submit" class="btn btn-primary" id="btnSearch">
                                                    <span class="glyphicon glyphicon-eye-open"></span>
                                                    แสดง
                                                </button>
                                                <FONT color="#FF8C00" >&nbsp;&nbsp;&nbsp;(กำหนดปี พ.ศ. เพื่อแสดงตารางออกแนะแนวเฉพาะปีที่เลือก)</FONT>
                                            </form>
                                            
                                            <hr>
                                            
                                            <?php if (isset($_SESSION['successAdd'])) {?>
                                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
                                            <?php }?>
                                            <?php if (isset($_SESSION['successRemove'])) {?>
                                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span></span> <?php echo $_SESSION['successRemove'];?></center></div>
                                            <?php }?>

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                       <th>วันที่</th>
                                                       <th>เวลา</th>
                                                       <th>โรงเรียน</th>
                                                       <th>อาจารย์ที่ออกแนะแนว</th>
                                                       <th></th>
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
                                                <?php if(count($rsGuide)>0):?>
                                                    <?php foreach ($rsGuide as $rGuide):?>
                                                        <?php $strDate = $rGuide->g_date ?>
                                                        <tr>
                                                            <td><?php echo DateThai($strDate)?></td>
                                                            <td><?php echo $rGuide->time ?> น.</td>
                                                            <td><a href="<?php echo site_url().'admin_manage_guide/showschool/'.$rGuide->sch_id;?>"> <?php echo $rGuide->sch_name ?></a></td>
                                                            <td><a href="<?php echo site_url().'admin_manage_guide/showteacher/'.$rGuide->tc_id;?>"> <?php echo $rGuide->tc_name.' '. $rGuide->tc_lastname ?></a></td>
                                                                    <td> 
                                                                        <a 
                                                                            type="button" class="btn btn-warning btn-xs" href="<?php echo  base_url('admin_manage_guide/viewedit/'.$rGuide->g_id); ?>" role="button">
                                                                            <span class="glyphicon glyphicon-edit"></span> แก้ไข
                                                                        </a>
                                                                        <button type="button" class="btn btn-danger btn-xs">
                                                                            <a href="#myModal" class="trash" data-id="<?php echo $rGuide->g_id; ?>"  data-toggle="modal" class="btn btn-info" role="button" ><font color="#FFFFF">ลบ </font></a>
                                                                        </button>                                                              
                                                                        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog modal-sm">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                        <h3 id="myModalLabel"><center><span class="glyphicon glyphicon-bell"></span> ข้อความแจ้งเตือน</center> </h3>

                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <p class="error-text"><center><h5><i class="fa fa-warning modal-icon"></i> คุณต้องการลบข้อมูลจริงหรือไม่ ?</h5></center>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                       <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">ยกเลิก</button> <a href="#" class="btn btn-danger"  id="modalDelete" >ยืนยัน</a>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                    <?php else: ?>

                                                           <td COLSPAN=5><center><b>--------------------------------------------------- ไม่มีข้อมูล ---------------------------------------------------</b></center></td>

                                                    <?php endif; ?>
                                                </tbody>
                                            </table>

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

