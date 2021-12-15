<?php
if (isset($_GET['data'])) {
    $data = $_GET['data'];
} else {
    $data = '';
}
if (isset($_GET['StudentClass'])) {
    $class = $_GET['StudentClass'];
} else {
    $class = '';
}
if (isset($_GET['date_month'])) {
    $date_month = $_GET['date_month'];
    $month = explode("-", $date_month);
    $month = $extraFunction->month($month[1]);
} else {
    $date_month = '';
}
// students/ActiveStudent/Play/Active/none/Active
if (isset($_POST['student_class'])) {
    $class = $_POST["student_class"];
    $view = $_POST["view"];
    $date = $_POST["date"];
    echo "<script>window.location = '".$rootDomain."Attendance/$view/$class/$date'</script>";
}
?>
<div class="flexBBox"> 
<fieldset>
  <legend><h2>Filter</h2></legend>
  <form id="form" enctype="multipart/form-data"   method="POST" action="">
            <div class="">
                <div class="row">
                    <div class="col-md-3">
                    <div class="form-group student_class" >
                        <label>Class:</label>
                        <select  class="form-control select" style="width: 100%;" name="student_class" id="student_class" required>
                            <option value="">
                                SELECT
                            </option>
                            <option <?php if ($class == "All") {
                                echo "selected";
                            } ?> value="All">
                                All
                            </option>
                            <option <?php if ($class == "Play") {
                                echo "selected";
                            } ?>  value="Play">
                                Play
                            </option>
                            <option <?php if ($class == "One") {
                                echo "selected";
                            } ?>  value="One">
                                One
                            </option>
                            <option <?php if ($class == "Two") {
                                echo "selected";
                            } ?>  value="Two">
                                Two
                            </option>
                            <option <?php if ($class == "Three") {
                                echo "selected";
                            } ?>  value="Three">
                                Three
                            </option>
                            <option <?php if ($class == "Four") {
                                echo "selected";
                            } ?>  value="Four">
                                Four
                            </option>
                            <option <?php if ($class == "Five") {
                                echo "selected";
                            } ?>  value="Five">
                                Five
                            </option>
                            <option <?php if ($class == "Six") {
                                echo "selected";
                            } ?>  value="Six">
                                Six
                            </option>
                            <option <?php if ($class == "Seven") {
                                echo "selected";
                            } ?>  value="Seven">
                                Seven
                            </option>
                            <option <?php if ($class == "Eight") {
                                echo "selected";
                            } ?>  value="Eight">
                                Eight
                            </option>
                            <option <?php if ($class == "Nine") {
                                echo "selected";
                            } ?>  value="Nine">
                                Nine
                            </option>
                            <option <?php if ($class == "Ten") {
                                echo "selected";
                            } ?>  value="Ten">
                                Ten
                            </option>
                        </select>
                    </div> 
                    </div>
                    <div class="col-md-3">
                    <div class="form-group student_class" >
                    <label>View :</label>
                     <select  class="form-control select" style="width: 100%;" name="view" onchange="getviewDatas()"  id="view"  required>
                    <option value="">select</option>
                    <option <?php if ($data == "Monthly") {
                        echo "selected";
                    } ?>  value="Monthly">Monthly</option>
                    <option <?php if ($data == "Daily") {
                        echo "selected";
                    } ?>  value="Daily">Daily</option>
                        </select>
                         </div>
                         </div>
                    <div class="col-md-3" id="dateCol"  style='display:none' >
                         </div>
                    <div class="col-md-3 customFlex" style="margin-top:11px">
                    <div class="form-group student_class" >
                    <label></label>
                    <br>
                    <input type="submit" class="btn btn-info" value="Filter"  id="submit"/>
                         </div>
                         </div>
                    </div>
                    <br />
                    <br />
            </div>
        </form>
</fieldset>
        </div>
        <script>
function  getviewDatas(){
    var value1 = document.getElementById("view").value;
    var classvalue = document.getElementById("student_class").value;
  if(value1=='Monthly'){
    document.getElementById('dateCol').innerHTML="<div class='form-group' ><label>Month:</label><input value='<?php echo $date_month; ?>' type='month' class='form-control' style='width: 100%;' name='date' id='month'  required /></div>";
    document.getElementById('dateCol').style.display='block';
  }else if(value1=='Daily'){
    document.getElementById('dateCol').innerHTML="<div class='form-group' ><label>Date:</label><input value='<?php echo $date_month; ?>' type='date' class='form-control' style='width: 100%;' name='date' id='date'  required /></div>";
    document.getElementById('dateCol').style.display='block';
  }else{
    document.getElementById('dateCol').innerHTML='';
    document.getElementById('dateCol').style.display='none';
  }
}
<?php if (isset($_GET['data'])) { ?>
     getviewDatas()
     <?php } ?>
        </script>
