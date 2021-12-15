@extends('admin/layout.layout')
@section('page_title','Dashboard')

@section('container')


<div class="student-header pt-3">
    <div class="student-header pt-3">
        <div class="adnewBTN" style="display: flex;justify-content: flex-end;">
            <a href="{{ url('school/students/form') }}" class="btn btn-success administrator pr-3 float-right"  id="add_new_student"><i class="fa fa-plus-circle"></i>Add New Student</a>
        </div>
   
   



        <style>.form-group {
            margin-left: 10px;
        }</style>
        <div class="flexBBox"> 
        
        <fieldset>
          <legend><h2>Filter</h2></legend>
          <form id="form" enctype="multipart/form-data"   method="POST" action="{{ url('school/students/search') }}">
            @csrf
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group student_class" >
                                <label>Class:</label>
                                <select  class="form-control select" onchange="changedata()" style="width: 100%;" name="student_class" id="student_class" required>
                                    <option value="">
                                        SELECT
                                    </option>
                                    <option  value="All">
                                        All
                                    </option>
                                    <option   value="Play">
                                        Play
                                    </option>
                                    <option   value="One">
                                        One
                                    </option>
                                    <option  value="Two">
                                        Two
                                    </option>
                                    <option  value="Three">
                                        Three
                                    </option>
                                    <option  value="Four">
                                        Four
                                    </option>
                                    <option   value="Five">
                                        Five
                                    </option>
                                    <option  value="Six">
                                        Six
                                    </option>
                                    <option value="Seven">
                                        Seven
                                    </option>
                                    <option  value="Eight">
                                        Eight
                                    </option>
                                    <option  value="Nine">
                                        Nine
                                    </option>
                                    <option  value="Ten">
                                        Ten
                                    </option>
                                </select>
                            </div> 

<script>
document.getElementById('student_class').value="{{ $class }}";

</script>

                            </div>
        
        
        
        
        
                            <div class="col-md-4">
                            <div class="form-group student_class" >
                            <label>Student List:</label>
                                <select  class="form-control select" style="width: 100%;" name="status"  id="getthis" required >
                                    <option value="">
                                        SELECT
                                    </option>
                                    <option  value="Active">
                                    Active 
                                    </option>
                                    <option   value="Pending">
                                    New Applications
                                    </option>
                                    <option  value="Reject">
                                    Reject
                                    </option>
                              
                                    <option  value="Application Aproved">
                                    Application Aproved
                                    </option>
                                  
                                </select>
                                 </div>
                                 <script>
                                    document.getElementById('getthis').value="{{ $status }}";
                                    
                                    </script>
        
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
             
        
                   document.getElementById("getthis").innerHTML = "<option value='Active' selected >Active</option>";
        
        
        
                }else{
        
                    document.getElementById("getthis").innerHTML = '<option value="">SELECT</option><option value="Active">Active</option><option  value="Pending">New Applications </option><option  value="Reject">Reject </option><option value="Application Aproved">Application Aproved</option>';
                }
            }
        
        
        
        
        
        
                
                </script>
        





        <div class="delete_aprove_form">
            <form class='delete_aprove' action="inc/insert_update.php" method="POST">
                <input type="hidden" name="redirectUrl" value="" />
                <input type="hidden" id="id" class='id' name="id" placeholder="">
                <input type="hidden" id="pagefor" name="pagefor" value='' placeholder="">
                <input type="submit" class='btn btn-danger' id='aproveMultiple' style='float:right;margin-bottom:12px;display:none;' name="aproveAll" value="">
            </form>
            <form class='delete_aprove' action="inc/insert_update.php" method="POST">
                <input type="hidden" name="redirectUrl" value="" />
                <input type="hidden" id="id" class='id' name="id" placeholder="">
          

                <input type="submit"  name='deleteMultiple' class='btn btn-danger' id='deleteMultiple' style='float:right;margin-bottom:12px;display:none;' name="DELETEAll" value="DELETE">
            </form>
        </div>
    </div>
    <div class="db-student-list mt-5" id="search">
        <div class="pt-3 pb-3 pl-3 pr-3">
            <table class="table" id="student_table" border="0">
                <thead class="thead-dark tableofHead">
                    <tr class="bg-tomato">
                        <th scope="col" colspan="8">
                            <h5 class="tableHeader">ALL STUDENTS</h5>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkAll" onclick="toggle()">
                                <label class="form-check-label" for="checkAll">
                                    Select All
                                </label>
                            </div>
                        </th>
                    </tr>
                    <tr class="bg-tomato">
                        <th style='width: 25px !important' class="" scope="col">#</th>
                        <th class="" scope="col">Image</th>
                        <th class="" scope="col">Class</th>
                        <th class="" scope="col">Roll Number</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="listofbody">
                   
@foreach ($rows as $row)
    


                        <tr id="deleted">
                            <td  style='width: 25px !important' scope="col"> <input type="checkbox" class='check' name='foo' value="" id="myCheck" onclick="myFunction('check',)">
                            </td>
                            <td scope="col">
                                 <form action="{{ url('school/students/image/upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" onchange='submit()' name="StudentPicture" id='image{{ $row->id }}' style='display:none'>
                                    <label class="custom-file-label" for="image{{ $row->id }}">
                                        <img id='student_image' class='student_image' class="blah" width='70px' src="{{ asset(env('FILE_PATH').'students/'.$row->StudentPicture) }}" alt="" /></label>
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                  
                                </form>
                            </td>
                            <td scope="col">{{ $row->StudentClass }}</td>
                            <td scope="col">{{ $row->StudentRoll }}</td>
                            <td scope="col">{{ $row->StudentName }}</td>
                            <td scope="col">{{ $row->StudentFatherName }}</td>
                            <td scope="col">{{ $row->StudentMotherName }}</td>
                            <td scope="col">{{ $row->StudentPhoneNumber }}</td>
                            <td scope="col" class="delete1">
                                <a name="view" value="view" id="" class="view_data actionBtn" onclick="view('{{ $row->id }}','{{ url('school/student/view/'.$row->id)  }}')" href="#"><i class="fal fa-eye"></i></a>
                                <a href="{{ url('/school/students/'.$status.'/edit/'.$row->id) }}" class="edit_data actionBtn"><i class="far fa-edit"></i></a>

                                <?php
                            
$approve = '<a href="javascript:void(0);" style="color:green" onclick="aproveFun('.$row->id.')"  class="Aprove actionBtn"><i class="fas fa-check"></i></a>';
$reject = '<a href="javascript:void(0);" style="color:red" onclick="rejectFun('.$row->id.')"  class="Reject actionBtn"><i class="far fa-times-circle"></i></a>';
$delete = '<a href="javascript:void(0);" style="color:red" onclick="deleteFun('.$row->id.')" class="Delete actionBtn"><i class="fal fa-trash-alt"></i></a>';







                                if ($status == 'Pending') {
                                ?>

                                    
{!! $approve !!}
{!! $reject !!}

                                <?php
                                } else if ($status == 'Reject') {
                                ?>

{!! $approve !!}
{!! $delete !!}

                                  
                                <?php
                                } else if ( $status == 'Application Aproved') {
                                ?>

{!! $reject !!}
{!! $delete !!}                         
                                <?php
                                } else {
                                ?>
                                {!! $reject !!}
                       {!! $delete !!}   
                                <?php } ?>



                            </td>
                        </tr>

                        @endforeach
                </tbody>
            </table>
    
        </div>
    </div>
</div>

<script>

    function deleteFun(id){


        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
    if (result.isConfirmed) {
    window.location.href="/school/student/action/Delete/"+id;
    }
})









    }
    
    function rejectFun(id){

        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Reject it!'
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href="/school/student/action/Reject/"+id;
    }
})











    }

    function aproveFun(id){

        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Approve it!'
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href="/school/student/action/Aprove/"+id;
    }
})


    }

   
    </script>

@endsection