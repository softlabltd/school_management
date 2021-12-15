
<?php 
if(isset($_GET['StudentClass'])){
    $class =  $_GET['StudentClass'];
}else{
    $class = '';
}
    
   // students/ActiveStudent/Play/Active/none/Active
if (isset($_POST['StudentClass'])) {
    $StudentClass = $_POST["StudentClass"];


        echo "<script>window.location = '".$rootDomain."Admission/$StudentClass'</script>";
 
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
                        <select class="form-control select" style="width: 100%;" name="StudentClass" id="StudentClass" required>
                        <option value="">
                            SELECT
                        </option>
                        <option <?php if ($class == 'Play') {
                                    echo "selected";
                                } ?> value="Play">
                            Play
                        </option>
                        <option <?php if ($class == 'One') {
                                    echo "selected";
                                } ?> value="One">
                            One
                        </option>
                        <option <?php if ($class == 'Two') {
                                    echo "selected";
                                } ?> value="Two">
                            Two
                        </option>
                        <option <?php if ($class == 'Three') {
                                    echo "selected";
                                } ?> value="Three">
                            Three
                        </option>
                        <option <?php if ($class == 'Four') {
                                    echo "selected";
                                } ?> value="Four">
                            Four
                        </option>
                        <option <?php if ($class == 'Five') {
                                    echo "selected";
                                } ?> value="Five">
                            Five
                        </option>
                        <option <?php if ($class == 'Six') {
                                    echo "selected";
                                } ?> value="Six">
                            Six
                        </option>
                        <option <?php if ($class == 'Seven') {
                                    echo "selected";
                                } ?> value="Seven">
                            Seven
                        </option>
                        <option <?php if ($class == 'Eight') {
                                    echo "selected";
                                } ?> value="Eight">
                            Eight
                        </option>
                        <option <?php if ($class == 'Nine') {
                                    echo "selected";
                                } ?> value="Nine">
                            Nine
                        </option>
                        <option <?php if ($class == 'Ten') {
                                    echo "selected";
                                } ?> value="Ten">
                            Ten
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
