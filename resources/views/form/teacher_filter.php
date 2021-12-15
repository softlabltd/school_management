
<?php 

if(isset($_GET["TeacherStatus"])){
$TeacherStatus = $_GET["TeacherStatus"];

}else{
    $TeacherStatus = '';
}


if(isset($_GET["data"])){
    $data = $_GET["data"];
    
    }else{
        $data = '';
    }
    
   // students/ActiveStudent/Play/Active/none/Active
if (isset($_POST['TeacherStatus'])) {
    $TeacherStatus = $_POST["TeacherStatus"];


        echo "<script>window.location = '".$rootDomain."staffs/$TeacherStatus'</script>";
 
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
                        <label>Teacher Status:</label>
                        <select class="form-control select" style="width: 100%;"  name="TeacherStatus" id="TeacherStatus" required>
                    <option value="">
                        SELECT
                    </option>
                    <option <?php if ($TeacherStatus == 'Pending') {
                                echo "selected";
                            } ?> value="Pending">
                        Pending
                    </option>
                    <option <?php if ($TeacherStatus == 'Active') {
                                echo "selected";
                            } ?> value="Active">
                        Active
                    </option>
                    <option <?php if ($TeacherStatus == 'Reject') {
                                echo "selected";
                            } ?> value="Reject">
                        Reject
                    </option>
                    <option <?php if ($TeacherStatus == 'Leave') {
                                echo "selected";
                            } ?> value="Leave">
                        Leave
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
      

 





        
        </script>
