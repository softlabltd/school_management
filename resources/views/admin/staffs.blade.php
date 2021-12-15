@extends('admin/layout.layout')
@section('page_title','Dashboard')

@section('container')




<div class="student-header pt-3 flexContainer">
    <a href="{{ url('school/staffs/form') }}" class="btn btn-success administrator pr-3  float-right" id="add_new_teacher"><i class="fa fa-plus-circle"></i> Create New</a>
</div>
<div class="db-student-list mt-5 ">
    <div class="pt-3 pb-3 pl-3 pr-3">
        <table id="student_table" class="table table-striped" border="0">
            <thead class="thead-dark tableofHead">
                <tr class="bg-tomato">
                    <th scope="col" colspan="8">
                        <h5 class="tableHeader">ALL STAFFS</h5>
                    </th>
                </tr>
                <tr class="bg-tomato">
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Incharge Class</th>
                    <th scope="col">Subject Handling</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="listofbody">
          @foreach ($rows as $row)
              
    
          <tr>
            <td>
                <form action="{{ url('school/staffs/image/upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" onchange='submit()' name="ProfilePicture" id='image{{ $row->id }}' style='display:none'>
                    <label class="custom-file-label" for="image{{ $row->id }}">
                        <img id='staffs_image' class='staffs_image' class="blah" width='70px' src="{{ asset(env('FILE_PATH').'staffs/'.$row->ProfilePicture) }}" alt="" /></label>
                    <input type="hidden" name="id" value="{{ $row->id }}">
                  
                </form>
                
                
               </td>
            <td><?php  echo $row->TeacherName; ?></td>
            <td><?php  echo $row->TeacherPosition; ?></td>
            <td><?php  echo $row->InchargeClass; ?></td>
            <td><?php  echo $row->TeacherSubjectHandling; ?></td>
            <td><?php  echo $row->TeacherPhoneNumber; ?></td>
            <td class="delete<?php echo $row->id ?>">
                 <a href="javascript:void(0);" name="view" value="view" id="" class="view_data actionBtn" onclick="view('{{ $row->id }}','{{ url('school/staffs/view/'.$row->id)  }}')"  ><i class="fal fa-eye"></i></a>

                <a href="{{ url('school/staffs/edit/'.$row->id) }}" class="edit_data actionBtn" ><i class="far fa-edit"></i></a>
             <span class="actionBtn" onclick="deleteFun('{{ $row->id }}')" style="color:red" id="delete"><i class="fal fa-trash-alt"></i></span>
               
            </td>
        </tr>

                        @endforeach
       
            </tbody>
        </table>
      

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
window.location.href="/school/staffs/action/Delete/"+id;
}
})

}

</script>

@endsection