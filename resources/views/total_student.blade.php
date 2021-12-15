<?php  if ($count>0) {
    ?>
        <table>
            <tr>
                <td colspan="3" class="columnStyleLeft" style="font-family: Century Gothic; font-size: 20pt;">
                    Total students :
                </td>
                <td colspan="3" class="columnStyleRight" style="font-family: Century Gothic; font-size: 20pt;">
                    <?php echo $count; ?>
                </td>
            </tr>
            <tr>
                <th class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">রোল নাম্বার</th>
                <th class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;">নাম </th>
                <th class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;">শ্রেনী </th>
                <th class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;">পিতার নাম</th>
                <th class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;">মাতার নাম</th>
                <th class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;">ঠিকানা </th>
            </tr>
            <?php
            $counter = "1";
        
            ?>
     @foreach ($rows as $row)
                    
   

                <tr>
                    <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentRoll ?></td>
                    <td class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentName	?></td>
                    <td class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentClass	?> </td>
                    <td class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentFatherName	?> </td>
                    <td class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentMotherName	?> </td>
                    <td class="columnStyleRight" style="font-family: Century Gothic; font-size: 10pt;"><?php echo $row->StudentAddress	?> </td>
                </tr>
            <?php
                $counter++;
          
            ?>
  @endforeach

        </table>
    <?php
    } else {
        echo "<h4 class='mt-3'><font color='red'>No Data Found!</font></h4>";
    }
    ?>