@foreach ($rows as $row)
    
<style type="text/css">
    .colspan2.thead-dark {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
    }

    .colspan2.table-succes {
        font-size: 15px;
        font-weight: 700;
    }
</style>
<section class="view">
    <div class="view_display">
        <table class="table " border="1">
            <tr class="thead-dark">
                <th class="colspan2 thead-dark" scope="col-1" colspan="2">TEACHER SINGLE VIEW </th>
            </tr>
            <tr class="table-success">
                <th class="colspan2 table-succes" scope="col-1" colspan="2">TEACHER DETAILS</th>
            </tr>
            <tbody>
            
                        <tr>
                            <td colspan="2">
                                <?php echo $row->ProfilePicture; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Teacher Id :</b><?php echo $row->TeacherId; ?>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <b>Teacher Full Name :</b><?php echo $row->TeacherName; ?>
                            </td>
                            <td><b>Teacher Gender :</b><?php echo $row->TeacherGender; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Teacher Date of Birth :</b><?php echo $row->TeacherDateOfBirth; ?>
                            </td>
                            <td><b>Incharge Class :</b><?php echo $row->InchargeClass; ?>
                        </tr>
                        <tr>
                            <td class="colspan2">
                                <b>Subject Handling :</b><?php echo $row->TeacherSubjectHandling; ?>
                            </td>
                            <td class="colspan2">
                                <b>Working Hours :</b><?php echo $row->TeacherWorkingHours; ?>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <b>Teacher Position :</b><?php echo $row->TeacherPosition; ?>
                            </td>
                            <td><b>Teacher Qualification :</b><?php echo $row->TeacherQualification; ?>
                        </tr>
                        <tr>
                            <td>
                                <b>Teacher Joining Date :</b><?php echo $row->TeacherJoiningDate; ?>
                            </td>
                            <td><b>Teacher Leaving Date :</b><?php echo $row->TeacherLeavingDate; ?>
                        </tr>
                        <tr class="table-success">
                            <th class="colspan2 table-succes" scope="col-1" colspan="2">CONTACT INFO</th>
                        </tr>
                        <tr>
                            <td scope="col"><b>Teacher Email :</b><?php echo $row->TeacherEmail; ?></td>
                            <td scope="col"><b>Teacher Phone Number :</b><?php echo $row->TeacherPhoneNumber; ?></td>
                        
                        </tr>
                        
                        <tr>
                        <td scope="col" colspan="2"><b>Teacher Address :</b><?php echo $row->TeacherAddress; ?></td>
                            
                        </tr>
                        
            
            </tbody>
        </table>
    </div>
</section>
@endforeach