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
                                <span class="glyphicon glyphicon-search"></span>
                                <b><FONT SIZE=3>ค้นหาข้อมูลการสมัครเรียน</FONT></b>                        
                            </div>
                            <div class="panel-body">
                            <?php if (isset($_SESSION['successAdd'])) {?>
                                <div class="alert alert-success"> <center><span class="glyphicon glyphicon-bell fa-lg"></span> <?php echo $_SESSION['successAdd'];?></center></div>
                            <?php }?>
                            <div class="col-md-12">
                                <form class="form-inline" name="searchform" id="searchform">
                                    <div class="form-group">
                                        <label for="textsearch" >ค้นหา</label>
                                            <input  type="text" name="itemname" id="itemname" class="form-control" placeholder="ชื่อ / เลขบัตรประชาชน" autocomplete="off">
                                    </div>
                                    <button type="button" class="btn btn-primary" id="btnSearch">
                                        <span class="glyphicon glyphicon-search"></span>
                                        ค้นหา
                                    </button>
                                    <FONT COLOR=#FF9900>&nbsp;&nbsp;&nbsp;สถานะ รอ คือยังไม่ได้ส่งหลักฐานการสมัคร <a href="<?php echo site_url("home_evidence/index")?>">คลิก</a> เพื่อส่งหลักฐานการสมัคร</FONT>
                                </form>
                            
                            </div>
                            <div class="loading"></div>
                            <div class="row" id="list-data" style="margin-top: 10px;"></div>

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
    
    <script type="text/javascript">
        $(function () {
        $("#btnSearch").click(function () {
        $.ajax({
        url: "<?php echo base_url("separate/home/search_show_view.php");?>",
        type: "post",
        data: {itemname: $("#itemname").val()},
        beforeSend: function () {
        $(".loading").show();
        },
        complete: function () {
        $(".loading").hide();
        },
        success: function (data) {
        $("#list-data").html(data);
        }
        });
        });
        $("#searchform").on("keyup keypress",function(e){
        var code = e.keycode || e.which;
        if(code==13){
        $("#btnSearch").click();
        return false;
        }
        });
        });
    </script>
    
    <script>
        $.validate({
        modules: 'security, file',
        onModulesLoaded: function () {
        $('input[name="pass_confirmation"]').displayPasswordStrength();}});
    </script> 
    
    </body>
</html>