
<?php 

if(isset($_GET["student_class"])){
$student_class = $_GET["student_class"];

}else{
    $student_class = '';
}


if(isset($_GET["data"])){
    $data = $_GET["data"];
    
    }else{
        $data = '';
    }
    
   // students/ActiveStudent/Play/Active/none/Active
if (isset($_POST['student_class'])) {
    $class = $_POST["student_class"];
    $data = $_POST["page"];

    if ($class=='All') {
        echo "<script>window.location = '".$rootDomain."students/ActiveStudent/$class/Active/none/Active'</script>";
    } else {
        if ($data=='ActiveStudent') {
            echo "<script>window.location = '".$rootDomain."students/$data/$class/Active/none/Active'</script>";
        } elseif ($data=='PendingStudent') {
            echo "<script>window.location = '".$rootDomain."students/$data/$class/Pending/none/Pending'</script>";
        } elseif ($data=='RejectStudent') {
            echo "<script>window.location = '".$rootDomain."students/$data/$class/Reject/none/Active'</script>";
        } elseif ($data=='TransferInStudent') {
            echo "<script>window.location = '".$rootDomain."students/$data/$class/Active/TransferIn/Active'</script>";
        } elseif ($data=='ApplicationAprovedStudent') {
            echo "<script>window.location = '".$rootDomain."students/$data/$class/Pending/none/Active'</script>";
        }
    }
}

?>
<style>.form-group {
    margin-left: 10px;
}</style>
<div class="flexBBox"> 

<fieldset>
  <legend><h2>Filter</h2></legend>
  <form id="form" enctype="multipart/form-data"   method="POST" action="">
            <div class="">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group student_class" >
                        <label>Class:</label>
                        <select  class="form-control select" onchange="changedata()" style="width: 100%;" name="student_class" id="student_class" required>
                            <option value="">
                                SELECT
                            </option>
                            <option <?php if($student_class=="All"){ echo "selected";} ?> value="All">
                                All
                            </option>
                            <option <?php if($student_class=="Play"){ echo "selected";} ?>  value="Play">
                                Play
                            </option>
                            <option <?php if($student_class=="One"){ echo "selected";} ?>  value="One">
                                One
                            </option>
                            <option <?php if($student_class=="Two"){ echo "selected";} ?>  value="Two">
                                Two
                            </option>
                            <option <?php if($student_class=="Three"){ echo "selected";} ?>  value="Three">
                                Three
                            </option>
                            <option <?php if($student_class=="Four"){ echo "selected";} ?>  value="Four">
                                Four
                            </option>
                            <option <?php if($student_class=="Five"){ echo "selected";} ?>  value="Five">
                                Five
                            </option>
                            <option <?php if($student_class=="Six"){ echo "selected";} ?>  value="Six">
                                Six
                            </option>
                            <option <?php if($student_class=="Seven"){ echo "selected";} ?>  value="Seven">
                                Seven
                            </option>
                            <option <?php if($student_class=="Eight"){ echo "selected";} ?>  value="Eight">
                                Eight
                            </option>
                            <option <?php if($student_class=="Nine"){ echo "selected";} ?>  value="Nine">
                                Nine
                            </option>
                            <option <?php if($student_class=="Ten"){ echo "selected";} ?>  value="Ten">
                                Ten
                            </option>
                        </select>
                    </div> 
                    </div>





                    <div class="col-md-4">
                    <div class="form-group student_class" >
                    <label>Student List:</label>
                        <select  class="form-control select" style="width: 100%;" name="page"  id="getthis" required >
                            <option value="">
                                SELECT
                            </option>
                            <option <?php if($data=="ActiveStudent"){ echo "selected";} ?> value="ActiveStudent">
                            ActiveStudent 
                            </option>
                            <option <?php if($data=="PendingStudent"){ echo "selected";} ?>  value="PendingStudent">
                            PendingStudent
                            </option>
                            <option <?php if($data=="RejectStudent"){ echo "selected";} ?>  value="RejectStudent">
                            RejectStudent
                            </option>
                            <option <?php if($data=="TransferInStudent"){ echo "selected";} ?>  value="TransferInStudent">
                            TransferInStudent
                            </option>
                            <option <?php if($data=="ApplicationAprovedStudent"){ echo "selected";} ?>  value="ApplicationAprovedStudent">
                            ApplicationAprovedStudent
                            </option>
                          
                        </select>
                         </div>


                         </div>
                    <div class="col-md-4 customFlex" style="margin-top:11px">
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
      

    function changedata(){
        var value = document.getElementById("student_class").value;
        if(value=="All"){
     

           document.getElementById("getthis").innerHTML = "<option value='ActiveStudent' selected >ActiveStudent</option>";



        }else{

            document.getElementById("getthis").innerHTML = '<option value="">SELECT</option><option <?php if($data=="ActiveStudent"){ echo "selected";} ?> value="ActiveStudent">ActiveStudent</option><option <?php if($data=="PendingStudent"){ echo "selected";} ?>  value="PendingStudent">PendingStudent </option><option <?php if($data=="RejectStudent"){ echo "selected";} ?>  value="RejectStudent">RejectStudent </option><option <?php if($data=="TransferInStudent"){ echo "selected";} ?>  value="TransferInStudent"> TransferInStudent</option><option <?php if($data=="ApplicationAprovedStudent"){ echo "selected";} ?>  value="ApplicationAprovedStudent">ApplicationAprovedStudent</option>';
        }
    }






        
        </script>
