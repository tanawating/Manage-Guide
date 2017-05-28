<?php
    $username = $_SESSION['username'];
    $sql = "select * from tb_teacher where tc_username='$username'"; //คำสั่ง SQL เพื่อการแสดงผล
    $query = mysql_query($sql) or die("error=$sql");
    $row = mysql_fetch_array($query);
?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b><FONT SIZE=3><span class="glyphicon glyphicon-home"></span> หน้าหลัก</FONT></b>                        
                        </div>
                        <div class="panel-body">
                            
                            <center><img src="fileupload/<?php echo $row['tc_pic']?>" class="img-rounded" alt="Cinque Terre" width="250" border="0"/></center>
                            <br>
                            <center><b><FONT SIZE=6.5>ยินดีต้อนรับ :   <FONT COLOR=#337ab7> <?php echo $row['tc_name']; ?> <?php echo $row['tc_lastname']; ?> </FONT></FONT></b></center>
                            <center><b><FONT SIZE=6.5>คุณกำลังอยู่ในส่วนของอาจารย์</FONT></b></center>
                            <br>
                        </div>
                    </div>
                