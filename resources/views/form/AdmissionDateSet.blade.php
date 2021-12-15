
<div id="mgs"></div>
<div class="db-student-list mt-5 ">

   <div class="pt-3 pb-3 pl-3 pr-3">
      <form id="form" enctype="multipart/form-data" method="POST" action="{{ url('school/form/AdmissionDateSet/submit') }}">
         @csrf
         <table class="table table-striped" border="0">
            <thead class="thead-dark">
               <tr>
                  <th scope="col" colspan="8">
                     <h5>
                        <center>ADMITION DATE EDIT</center>
                        </center>
                     </h5>
                  </th>
               </tr>
            </thead>
            <?php 
            
            ?>
            <input type="hidden" name="id" value="<?php echo $rows[0]->id  ?>" />
            <input type="hidden" name="year" value="<?php echo $rows[0]->year  ?>" />
            <tr>
             
               <td width="50%">
                  <h6>ADMITION START DATE :</h6>
               </td>
               <td width="100%">
                  <input type="date" name="start_date" class="form-control" value="{{ $rows[0]->start }}" required />
            </tr>
            <tr>
               </td>
               <td width="50%">
                  <h6>ADMITION END DATE :</h6>
               </td>
               <td width="100%">
                  <input type="date" name="end_date" class="form-control" value="{{ $rows[0]->end }}" required />
               </td>
            </tr>
            <tr>
               </td>
               <td width="50%">
                  <h6>ADMITION REMOVE DATE :</h6>
               </td>
               <td width="100%">
                  <input type="date" name="remove_date" class="form-control" value="{{ $rows[0]->remove }}" required />
               </td>
            </tr>
            <tr>
               <td>
                  <input class="btn btn-info" type="submit" value="Update" id="update" />
               </td>
            </tr>
      </form>
      </table>
   </div>
</div>