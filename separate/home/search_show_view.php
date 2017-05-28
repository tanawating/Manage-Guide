<?php 
$db_server = "localhost"; // hostname ของ database server
$db_user = "root"; // username
$db_pass = ""; // password
$db_src = "db_system_guide"; // ชื่อฐานข้อมูล
$db = new mysqli( $db_server , $db_user , $db_pass, $db_src );
mysqli_query($db, "SET NAMES UTF8");

$sql = "select * from tb_enroll where en_identity like '%{$_REQUEST['itemname']}%' OR en_fristname like '%{$_REQUEST['itemname']}%' order by en_id DESC";
$result = $db->query($sql);
?>

    <div class="col-md-12">
        <br/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 17%">เลขบัตรประชาชน</th>
                        <th><center>ชื่อ - นามสกุล</center></th>
                        <th><center>ระดับเข้าศึกษา</center></th>
                        <th><center>สาขาวิชา</center></th>
                        <th><center>สถานะ</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; while($show = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $show['en_identity'];?></td>
                        <td><?php echo $show['en_prefix'];?>&nbsp;<?php echo $show['en_fristname'];?>&nbsp;<?php echo $show['en_lastname'];?></td>
                        <td><?php echo $show['en_request_major'];?></td>
                        <td><?php echo $show['en_major'];?></td>
                    <?php if ($show['en_status']=='ผ่าน') { ?>
                        <td><font color = "#1E90FF"><center><?php echo $show['en_status'];?></center></font></td>
                    <?php } else { ?>
                            <td><font color = "#CD5C5C"><center><?php echo $show['en_status'];?></center></font></td>
                    <?php } ?>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
    </div>