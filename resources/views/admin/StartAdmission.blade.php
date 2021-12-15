@extends('admin/layout.layout')
@section('page_title','Dashboard')

@section('container')

<div class="student-header pt-3">
    <button onclick="insert('/school/form/AdmissionDateSet')"  class="btn btn-success administrator pr-3  float-right" id="add_new_admition"><i  class="fa fa-plus-circle"></i> Create New</button>
 </div>

 <div id="mgs"></div>
 <div class="db-student-list mt-5 ">
    <div class="pt-3 pb-3 pl-3 pr-3">
       <table class="table table-striped" border="1">
          <thead class="thead-dark">
             <tr>
                <th scope="col" colspan="8">
                   <h5>
                      <center>ALL ADMITION DATE</center>
                      </center>
                   </h5>
                </th>
             </tr>
             <tr>
                <th scope="col">Serial</th>
                <th scope="col">year</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Action</th>
             </tr>
          </thead>
          <?php
      
             $cound = "1";
             foreach ($run_query as $row) {
          ?>
                <tr id="deleted<?php echo $row->id ?>">
                   <td>
                      <?php
                      echo $cound;
                      ?>
                   </td>
                   <td><?php echo $row->year ?> </td>
                   <td><?php echo $row->start ?></td>
                   <td><?php echo $row->end ?></td>
                   <td>
                      <a href="#" class="edit_data<?php echo $row->id ?> actionBtn"  onclick="insert('/school/form/AdmissionDateSet/{{ $row->id }}')"   id="<?php echo $row->id ?>"><i class="far fa-edit"></i></a>
           
                      <a href="#" onclick="deleteFun('/school/form/AdmissionDateDelete/{{ $row->id }}')" class="delete actionBtn"  ><i class="fal fa-trash-alt"></i></a>

                   </td>
                </tr>
          <?php
                $cound++;
             }
  
          ?>
       </table>
    </div>
 </div>


 <script type="text/javascript">


function insert(url){


   $.ajax({
               url: url,
               method: "POST",
               data: {
             
               },
               success: function(data) {
                  $("#employee_detail").html(data);
                  $("#dataModal").modal("show");
               },
            });
 


}
function deleteFun(url){


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
window.location.href=url;
}
})
}
         
</script>



@endsection