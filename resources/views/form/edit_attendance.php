<?php
require_once("../inc/config.php");
$id = $_REQUEST["id"];
$sqlData = $conn->query("SELECT * FROM `attendance` WHERE id = '$id'");
$row = $sqlData->fetch_object();

?>
<style type="text/css">
    input[type=radio] {
        display: none;
    }

    .Presents:checked+label.Presents {
        background: green;
    }
</style>
<div id="success"></div>
<div class="db-student-list mt-5">
    <div class="pt-3 pb-3 pl-3 pr-3">
  
        <form id="form" enctype="multipart/form-data" method="POST" action="<?php echo $rootDomain; ?>inc/insert_update.php">
            <table class="table " border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="8">
                            <h5>
                                <center>CLASS <?php echo $row->studentClass; ?> ATTENDANCE</center>
                                </center>
                            </h5>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Roll NO.</th>
                        <th scope="col">Full Name</th>
                        <th class="" scope="col">Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                 
                    if ($sqlData == true) {
                   
                       
                    ?>
                    
                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                    <input type="hidden" name="urladdress" value="<?php echo $_POST['urladdress']; ?>">
                            <tr>
                                <td scope="col"><?php echo $row->stu_roll; ?>
                                </td>
                                <td scope="col"><?php echo $row->stu_name; ?>
                                </td>
                              
                                <td scope="col">
                                    <input type="radio" class="Presents Present" id="Presents" name="attendence" value="Present" <?php if ($row->attendenceValue == "Present") { echo"checked=checked";} ?> required /><label class="Presents att" for="Presents">Present</label>

                                    <input type="radio" id="Absents" name="attendence" value="Absent" <?php if ($row->attendenceValue == "Absent") {echo "checked=checked";} ?> required /><label class="att" for="Absents">Absent</label>
                                </td>
                            </tr>
                    <?php
                           
               
                    }
                    ?>
                </tbody>
            </table>
            <input class="btn btn-success" type="submit" value="SUBMIT" name="updateAttendance"  id="save_btn" />
        </form>
    </div>
</div>