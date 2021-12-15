@extends('admin/layout.layout')
@section('page_title','Dashboard')

@section('container')




<form  enctype="multipart/form-data" method="POST" action="{{ url('school/students/form/submit') }}">

    @csrf
    <input class="form-control" type="hidden" value="{{ $rows[0]->id }}" name="id" id="id" />


    <input class="form-control" type="hidden" value="<?php echo date('Y') ?>" placeholder="Enter Year" name="Year" id="Year" />



    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Admission ID:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->AdmissionID }}" placeholder="Enter Admission ID" name="AdmissionID" id="AdmissionID" readonly required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student ID:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentID }}" placeholder="Enter Student ID" name="StudentID" id="StudentID" readonly required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Roll:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentRoll }}" placeholder="Enter Student Roll" name="StudentRoll" id="StudentRoll" readonly required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Class:</label>
           
<?php

if($rows[0]->id==''){



?>
                    <select class="form-control select" onchange="getClass()" style="width: 100%;" name="StudentClass" id="StudentClass"  required>
                        <option value="{{ $rows[0]->AdmissionID }}">
                            SELECT
                        </option>
                        <option>
                            Play
                        </option>
                        <option>
                            One
                        </option>
                        <option>
                            Two
                        </option>
                        <option>
                            Three
                        </option>
                        <option>
                            Four
                        </option>
                        <option>
                            Five
                        </option>
                        <option>
                            Six
                        </option>
                        <option>
                            Seven
                        </option>
                        <option>
                            Eight
                        </option>
                        <option>
                            Nine
                        </option>
                        <option>
                            Ten
                        </option>
                    </select>
          <?php  }else{
              ?>
<input type="text" name="StudentClass" id="StudentClass" class="form-control" readonly>
              <?php 
          } ?>
            </div>
            <script>

                document.getElementById('StudentClass').value="{{ $rows[0]->StudentClass }}";
                
                </script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Gender:</label>
                <select class="form-control select" style="width: 100%;" name="StudentGender" id="StudentGender" required>
                    <option value="">
                        SELECT
                    </option>
                    <option>
                        Male
                    </option>
                    <option>
                        Female
                    </option>
                    <option>
                        Other
                    </option>
                </select>
            </div>
            <script>

                document.getElementById('StudentGender').value="{{ $rows[0]->StudentGender }}";
                
                </script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Religion:</label>
                <select class="form-control select" style="width: 100%;" name="StudentReligion" id="StudentReligion" required>
                    <option value="">
                        SELECT
                    </option>
                    <option>
                        Islam
                    </option>
                    <option>
                        Hindu
                    </option>
                    <option>
                        Other
                    </option>
                </select>
            </div>

            <script>

                document.getElementById('StudentReligion').value="{{ $rows[0]->StudentReligion }}";
                
                </script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Name:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentName }}" placeholder="Enter StudentName" name="StudentName" id="StudentName" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Father Name:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentFatherName }}" placeholder="Enter Student Father Name" name="StudentFatherName" id="StudentFatherName" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Mother Name:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentMotherName }}" placeholder="Enter Student Mother Name" name="StudentMotherName" id="StudentMotherName" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Father Occupation:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentFatherOccupation }}" placeholder="Enter Student Father Occupation" name="StudentFatherOccupation" id="StudentFatherOccupation" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Mother Occupation:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentMotherOccupation }}" placeholder="Enter Student Mother Occupation" name="StudentMotherOccupation" id="StudentMotherOccupation" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Email:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentEmail }}" placeholder="Enter Student Email" name="StudentEmail" id="StudentEmail" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Date Of Birth:</label>
                <input class="form-control" type="date" value="{{ $rows[0]->StudentDateOfBirth }}" placeholder="Enter Student Date Of Birth" name="StudentDateOfBirth" id="StudentDateOfBirth" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Birth Certificate No:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentBirthCertificateNo }}" placeholder="Enter Student Birth Certificate No" name="StudentBirthCertificateNo" id="StudentBirthCertificateNo" maxlength="17" required />
            </div>
        </div>
        <div class="col-md-4 d-none" id="Sgroup" >
            <div class="form-group">
                <label>Student Group:</label>
                <select class="form-control select" style="width: 100%;" name="StudentGroup" id="StudentGroup" >
                    <option value="">
                        SELECT
                    </option>
                    <option>
                        Science
                    </option>
                    <option>
                        Humanities
                    </option>
                    <option>
                        Commerce
                    </option>
                </select>
            </div>


            <script>

                document.getElementById('StudentGroup').value="{{ $rows[0]->StudentGroup }}";
                
                </script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Address:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentAddress }}" placeholder="Enter Student Address" name="StudentAddress" id="StudentAddress" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Phone Number:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentPhoneNumber }}" placeholder="Enter Student Phone Number" name="StudentPhoneNumber" id="StudentPhoneNumber" maxlength="11" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Area Postal Code:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->AreaPostalCode }}" placeholder="Enter Area Postal Code" name="AreaPostalCode" id="AreaPostalCode" required />
            </div>
        </div>
      
        <div class="col-md-4">
            <div class="form-group">
                <label>Student Status:</label>
                <select class="form-control select" style="width: 100%;" name="StudentStatus" id="StudentStatus" required>
                    <option>
                        Active
                    </option>
                    <option>
                        Pending
                    </option>
                    
                    <option>
                        Reject
                    </option>
                </select>
            </div>

<script>

document.getElementById('StudentStatus').value="{{ $rows[0]->StudentStatus }}";

</script>

        </div>
        <div class="col-md-4 d-none" >
            <div class="form-group">
                <label>Student Tranfer From:</label>
                <input class="form-control" type="text" value="{{ $rows[0]->StudentTranferFrom }}" placeholder="Enter Student Tranfer From" name="StudentTranferFrom" id="StudentTranferFrom" readonly required />
            </div>
        </div>



        <input type="hidden" name="StudentPicture" value="{{ $rows[0]->StudentPicture }}">
        <input type="hidden" name="JoiningDate" value="{{ $rows[0]->JoiningDate }}">
        <input type="hidden" name="StudentTranferStatus" value="{{ $rows[0]->StudentTranferStatus }}">
        <input type="hidden" name="AplicationStatus" value="{{ $rows[0]->AplicationStatus }}">
        <input type="hidden" name="ThisMonthPaymentStatus" value="{{ $rows[0]->ThisMonthPaymentStatus }}">
        <input type="hidden" name="created_at" value="{{ $rows[0]->created_at }}">
        <input type="hidden" name="updated_at" value="{{ $rows[0]->updated_at }}">
        <input type="hidden" name="status" value="{{ $status }}">
        
        
        <div class="col-md-12" >
            <div class="form-group">
                <input class="btn btn-info" type="submit" value="SAVE DATA" id="submit" />
            </div>
        </div>
        
        



    </div>


   
</form>
<script type="text/javascript">




    function getClass() {
        var classvalue = $("#StudentClass").val();
        var Sgroup = $("#Sgroup");
        
if(classvalue=='Nine' || classvalue=='Ten'){
    Sgroup.css('display', 'block');
}else{
    Sgroup.val('');
    Sgroup.css('display', 'none');
}
        



        $.ajax({
            url: "{{ url('school/student/check') }}",
            method: "POST",
            data: {

                "_token": "{{ csrf_token() }}",
                "classvalue": classvalue

         
            },
            success: function(data) {
               // alert(data);
                cleanStr = data.trim();
                if (cleanStr == "") {
                    alert("Data Not Found !");
                } else {
                    var namedata = data.split(",");
                    $("#AdmissionID").val(namedata[0]);
                    $("#StudentID").val(namedata[1]);
                    $("#StudentRoll").val(namedata[2]);
                 
                   
                }
            },
        });
    };

</script>

@endsection