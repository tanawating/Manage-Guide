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
                                <span class="glyphicon glyphicon-eye-open"></span><FONT SIZE=3><b> ตรวจสอบข้อมูลการสมัครเรียน</b></FONT> <span class="glyphicon glyphicon-arrow-right"></span> <b><FONT SIZE=3><?php echo $rs->en_prefix ?> <?php echo $rs->en_fristname ?> <?php echo $rs->en_lastname ?></FONT></b>
                            </div>
                            <div class="panel-body">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >เลขที่สมัคร</th>
                                            <td><?php echo $rs->en_id ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >ชื่อ - นามสกุล</th>
                                            <td><?php echo $rs->en_prefix ?> <?php echo $rs->en_fristname ?> <?php echo $rs->en_lastname ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >เลขประจำตัวบัตรประชาชน</th>
                                            <td><?php echo $rs->en_identity ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >วันเกิด</th>
                                            <td><?php echo $rs->en_birthday ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">ที่อยู่</th>
                                            <td>บ้านเลขที่ <?php echo $rs->en_house_number ?> หมู่ที่ <?php echo $rs->en_moo ?> ถนน <?php echo $rs->en_road ?> ตำบล <?php echo $rs->en_district ?> อำเภอ <?php echo $rs->en_amphur ?> จังหวัด <?php echo $rs->en_city ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">เบอร์โทรศัพท์</th>
                                            <td><?php echo $rs->en_phone_number ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">ชื่อ-สกุล บิดา</th>
                                            <td> <?php echo $rs->en_name_father ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >ชื่อ-สกุล มารดา</th>
                                            <td><?php echo $rs->en_name_mother ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >มีพี่น้องร่วมบิดามารดา</th>
                                            <td><?php echo $rs->en_brethren ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >เป็นบุตรคนที่</th>
                                            <td><?php echo $rs->en_person_num ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">เบอร์ติดต่อผู้ปกครอง</th>
                                            <td><?php echo $rs->en_parent_phone_number ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">ปัจจุบันกำลังศึกษาอยู่ชั้น</th>
                                            <td><?php echo $rs->en_studying_in_class ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">โปรแกรม/สาขา</th>
                                            <td> <?php echo $rs->en_studying_in_major ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >โรงเรียน/วิทยาลัย ที่กำลังศึกษา</th>
                                            <td><?php echo $rs->en_studying_in_school ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >อำเภอ</th>
                                            <td><?php echo $rs->en_studying_in_school_amphur ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >จังหวัด</th>
                                            <td><?php echo $rs->en_studying_in_school_city ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">คะแนนเฉลี่ยสะสม</th>
                                            <td><?php echo $rs->en_gpa ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">ขอสมัครเข้าศึกษาระดับ</th>
                                            <td><?php echo $rs->en_request_major ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">ปีการศึกษา</th>
                                            <td> <?php echo $rs->en_year_education ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >หลักสูตร</th>
                                            <td><?php echo $rs->en_course ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >คณะ</th>
                                            <td><?php echo $rs->en_faculty ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;" >สาขาวิชา</th>
                                            <td><?php echo $rs->en_major ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">สถาบัน</th>
                                            <td><?php echo $rs->en_university ?></td>
                                        </tr>
                                        <tr class="active">
                                            <th style="width: 30%;text-align:right;">วันที่สมัครเรียน</th>
                                            <td><?php echo $rs->en_date ?></td>
                                        </tr>
                                    </thead>
                                </table>
                                <center>        
                                <input name ="en_id" type="hidden" id="en_id" value="<?PHP echo $rs->en_id?>" />
                                <button class="btn btn-danger" onClick = "window.close()"><span class="glyphicon glyphicon-remove"></span> ปิดหน้าต่าง </button> </center>

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

