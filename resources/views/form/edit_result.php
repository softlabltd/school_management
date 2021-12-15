
<?php
require_once('../inc/config.php');

$id =  $_POST['id'];
$chechk = $studentResults->getAllResultbyId($conn,$id);
$rows = $chechk->fetch_object();


 $class = $rows->StudentClass;
 $Result = $rows->Result;
 $Result = explode(",",$Result);


 $ResultStatus=  $rows->ResultStatus;
$promotionStatus=  $rows->promotionStatus;
$Date=  $rows->Date;
$SmsResltStatus=  $rows->SmsResltStatus;
$id=  $rows->id;
$examType=  $rows->ExamType;



$redirect = $_POST['urladdress'];
?>

<form id="form" enctype="multipart/form-data" method="POST" action="<?php echo $rootDomain; ?>inc/insert_update.php">
            <div style="width: 100%;" class="exam">
             
                <input type="hidden" value="<?php echo $ResultStatus; ?>" name="ResultStatus">
                <input type="hidden" value="<?php echo $promotionStatus; ?>" name="promotionStatus">
                <input type="hidden" value="<?php echo $SmsResltStatus; ?>" name="SmsResltStatus">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <input type="hidden" value="<?php echo $examType; ?>" name="examType">
                <input type="hidden" value="<?php echo $Date; ?>" name="date">
                <input type="hidden" value="<?php echo $redirect; ?>" name="Redirect">
                
            </div>
            <?php

            if ($examType == 'Weakly_Examination' || $examType == 'ADMITION_TEST_RESULT') {
              ?>
                      <div class="row">
                      <div class="col-md-6">
                      <div class="form-group student_class" >
                        <label>Subject:</label>
             <h4><?php echo $rows->Subject; ?></h4>
             <input type="hidden" value="<?php echo $rows->Subject; ?>" name="Subject">
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group student_class" >
                        <label>Total Mark:</label>
                <input type="text" name="total_mark" value="<?php echo $rows->TotalMark; ?>" placeholder="Input Total Mark" class="mt-3 mb-5 col-md-6 form-control" required />
                </div>
                </div>
            </div>     
                           
                      <?php
                        }
                        ?>

            <table class="table" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="15">
                            <h5>
                                <center>
                                    CLASS
                                    <?php echo $class; ?>
                                    RESULT
                                </center>
                            </h5>
                        </th>
                    </tr>
                    <tr id="changeTableHead">
                        
                        <?php
                        if ($examType == 'Weakly_Examination' || $examType=='ADMITION_TEST_RESULT') {
                            echo '<th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th><th scope="col">Mark</th>';
                        } else {
                            if ($class == 'Play' || $class == 'One' || $class == 'Two') {
                        ?><th scope="col">Roll NO.</th>
                        <th scope="col">Full Name</th>
                                <th class="" scope="col">বাংলা</th>
                                <th class="" scope="col">ইংলিশ</th>
                                <th class="" scope="col">গনিত</th>
                            <?php
                            } else if ($class == 'Three' || $class == 'Four' || $class == 'Five') {
                            ?><th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th>
                                <th class="" scope="col">বাংলা</th>
                                <th class="" scope="col">ইংলিশ</th>
                                <th class="" scope="col">গনিত</th>
                                <th class="" scope="col">বিজ্ঞান</th>
                                <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                                <th class="" scope="col">ইসলাম ধর্ম</th>
                                <th class="" scope="col">হিন্দু ধর্ম</th>
                            <?php
                            } else if ($class == 'Six' || $class == 'Seven' || $class == 'Eight') {
                            ?><th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th>
                                <th class="" scope="col">বাংলা ১ম</th>
                                <th class="" scope="col">বাংলা ২য়</th>
                                <th class="" scope="col">ইংলিশ ১ম</th>
                                <th class="" scope="col">ইংলিশ ২য়</th>
                                <th class="" scope="col">গনিত</th>
                                <th class="" scope="col">বিজ্ঞান</th>
                                <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                                <th class="" scope="col">ইসলাম ধর্ম</th>
                                <th class="" scope="col">হিন্দু ধর্ম</th>
                                <th class="" scope="col">কৃষি</th>
                                <th class="" scope="col">তথ্য ও যোগাযোগ প্রযোক্তি</th>
                            <?php
                            } else  if($class == 'Nine' || $class == 'Ten')  {
                            ?><th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th>
                                <th class="" scope="col">বাংলা ১ম</th>
                                <th class="" scope="col">বাংলা ২য়</th>
                                <th class="" scope="col">ইংলিশ ১ম</th>
                                <th class="" scope="col">ইংলিশ ২য়</th>
                                <th class="" scope="col">গনিত</th>
                                <th class="" scope="col">রসায়ন</th>
                                <th class="" scope="col">পদার্থ</th>
                                <th class="" scope="col">জীববিজ্ঞান</th>
                                <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                                <th class="" scope="col">ইসলাম ধর্ম</th>
                                <th class="" scope="col">হিন্দু ধর্ম</th>
                                <th class="" scope="col">কৃষি</th>
                                <th class="" scope="col">তথ্য ও যোগাযোগ প্রযোক্তি</th>
                        <?php
                            }else{
                                echo "<th><center>TABLE IS EMPTY .FIRST FILTER DATA</center></th>";
                            }
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Year = date('Y');
                    $sql = $studentResults->getAllResultbyId($conn,$id);
                      $count = $sql->num_rows;
                    if ($sql == true) {
                        $counter = 0;
                        while ($row = $sql->fetch_object()) {
                    ?>
                            <input type="hidden" name="totalData" value="<?php echo $count ?>" />
                            <tr id="changeTableBody">
                                <td scope="col">
                                    <?php echo $row->StudentRoll; ?>
                                    <input type="hidden" name="StudentRoll[]" value="<?php echo $row->StudentRoll; ?>" />
                                    <input type="hidden" name="StudentID[]" value="<?php echo $row->StudentID; ?>" />
                                    <input type="hidden" value="<?php echo $row->StudentPhoneNumber; ?>" name="PhoneNumber[]">
                                </td>
                                <td scope="col">
                                    <?php echo $row->StudentName; ?>
                                    <input type="hidden" name="StudentName[]" value="<?php echo $row->StudentName; ?>" />
                                    <input type="hidden" name="class" value="<?php echo $class; ?>" />
                                    <?php 
                   $Year = date('Y');
                   $AddmissionYear = date('Y') + 1;
            
                   if ($examType=='ADMITION_TEST_RESULT') {
                       ?>
                           <input type="hidden" name="year" value="<?php echo $AddmissionYear; ?>" />
                           
                       <?php 
                   }else{
                       ?>
                           <input type="hidden" name="year" value="<?php echo date("Y"); ?>" />
                        

                               <?php
                   }?>
                                </td>
                                <?php
                               
                                if ($examType == 'Weakly_Examination' || $examType == 'ADMITION_TEST_RESULT') {
                                ?>
                                    <td scope="col">
                                        <input style="width: 38px !important; padding: 0;" value='<?php echo $Result[0]; ?>' class="width-100 form-control" type="tel" name="Mark[]" required />
                                    </td>
                                    <?php   } else {
                                    if ($class == 'Play' || $class == 'One' || $class == 'Two') {
                                    ?>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" value="<?php echo $Result[0]; ?>" class="width-100 form-control" type="tel" id="bangla<?php echo $counter; ?>" name="Bangla[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" value="<?php echo $Result[1]; ?>" class="width-100 form-control" type="tel" name="English[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;"  value="<?php echo $Result[2]; ?>" class="width-100 form-control" type="tel" name="Math[]" required />
                                        </td>
                                    <?php
                                    } elseif ($class == 'Three' || $class == 'Four' || $class == 'Five') {
                                    ?>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[0]; ?> class="width-100 form-control" type="tel" id="bangla<?php echo $counter; ?>" name="Bangla[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[1]; ?> class="width-100 form-control" type="tel" name="English[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[2]; ?> class="width-100 form-control" type="tel" name="Math[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[4]; ?> class="width-100 form-control" type="tel" name="Science[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[3]; ?> class="width-100 form-control" type="tel" name="B_and_B[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[5]; ?> <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionIslam[]" <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[6]; ?><?php if ($db_student["Religion"] == 'Islam') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionHindu[]" <?php if ($db_student["Religion"] == 'Islam') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                    <?php
                                    } elseif ($class == 'Six' || $class == 'Seven' || $class == 'Eight') {
                                    ?>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[0]; ?>  class="width-100 form-control" type="tel" id="bangla<?php echo $counter; ?>" name="Bangla_1st[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[1]; ?>  class="width-100 form-control" type="tel" name="Bangla_2nd[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[2]; ?>  class="width-100 form-control" type="tel" name="English_1st[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[3]; ?>  class="width-100 form-control" type="tel" name="English_2nd[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[4]; ?>  class="width-100 form-control" type="tel" name="Math[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[6]; ?>  class="width-100 form-control" type="tel" name="Science[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[5]; ?>  class="width-100 form-control" type="tel" name="B_and_B[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[7]; ?> <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionIslam[]" <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[8]; ?> <?php echo $Result[0]; ?> <?php if ($db_student["Religion"] == 'Islam') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionHindu[]" <?php if ($db_student["Religion"] == 'Islam') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[9]; ?>  class="width-100 form-control" type="tel" name="Agriculture[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[10]; ?>  class="width-100 form-control" type="tel" name="ICT[]" required />
                                        </td>
                                    <?php
                                    } else  if($class == 'Nine' || $class == 'Ten') {
                                    ?>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[0]; ?>  class="width-100 form-control" type="tel" id="bangla<?php echo $counter; ?>" name="Bangla_1st[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[1]; ?>  class="width-100 form-control" type="tel" name="Bangla_2nd[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[2]; ?>  class="width-100 form-control" type="tel" name="English_1st[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[3]; ?>  class="width-100 form-control" type="tel" name="English_2nd[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[4]; ?>  class="width-100 form-control" type="tel" name="Math[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[6]; ?>  class="width-100 form-control" type="tel" name="Chemistry[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[7]; ?>  class="width-100 form-control" type="tel" name="physics[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[8]; ?>  class="width-100 form-control" type="tel" name="Biology[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[5]; ?>  class="width-100 form-control" type="tel" name="B_and_B[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[9]; ?> <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionIslam[]" <?php if ($db_student["Religion"] == 'Hindu') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0; <?php echo $Result[10]; ?> <?php if ($db_student["Religion"] == 'Islam') {
                                                                                                    echo 'background:#224150;border: 0;color:white;';
                                                                                                } ?>" value="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                        echo "0";
                                                                                    } ?>" class="width-100 form-control" type="<?php if ($db_student["Religion"] == 'Islam') {
                                                                                                                    echo 'hidden';
                                                                                                                } ?>" name="ReligionHindu[]" <?php if ($db_student["Religion"] == 'Islam') {
                                                                                                        echo "";
                                                                                                    } ?> />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[11]; ?>  class="width-100 form-control" type="tel" name="Agriculture[]" required />
                                        </td>
                                        <td scope="col">
                                            <input style="width: 38px !important; padding: 0;" <?php echo $Result[12]; ?>  class="width-100 form-control" type="tel" name="ICT[]" required />
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                            </tr>
                    <?php
                            $counter++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        
            <input class="btn btn-success" type="submit" value="SUBMIT" name="SubmitResult" id="save_btn" />
            </form>