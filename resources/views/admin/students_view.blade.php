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
					<th class="colspan2 thead-dark" scope="col-1" colspan="2">STUDENTS AND PARENTS DETAILS </th>
				</tr>
				<tr class="table-success">
					<th class="colspan2 table-succes" scope="col-1" colspan="2">STUDENTS DETAILS</th>
				</tr>
				<tbody>
				
							<tr>
								<td colspan="2">
									<center>
										<img style="width: 150px !important;height: 150px !important;border-radius: 0 !important;" src="{{ asset(env('FILE_PATH').'students/'.$row->StudentPicture) }}" alt="" />
									</center>
								</td>
							</tr>
							<tr>
								<td>
									<b>Aplication Id :</b><?php echo $row->AdmissionID; ?>
								</td>
								<td>
									<b>Student Id :</b><?php echo $row->StudentID; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Student Full Name :</b><?php echo $row->StudentName; ?>
								</td>
								<td><b>Student Gender :</b><?php echo $row->StudentGender; ?></td>
							</tr>
							<tr>
								<td>
									<b>Student Date of Birth :</b><?php echo $row->StudentDateOfBirth; ?>
								</td>
								<td><b>Class :</b><?php echo $row->StudentClass; ?>
							</tr>
							<tr>
								<td class="colspan2" colspan="2">
									<b>Roll :</b><?php echo $row->StudentRoll; ?>
								</td>
							</tr>
							<tr class="table-success">
								<th class="colspan2 table-succes" scope="col-1" colspan="2">PARENTS DETAILS</th>
							</tr>
							<tr>
								<td scope="col"><b>Father Name :</b><?php echo $row->StudentFatherName; ?></td>
								<td scope="col"><b>Father Occupation :</b><?php echo $row->StudentFatherOccupation; ?></td>
							
							</tr>
							
							<tr>
							<td scope="col"><b>Mother Name :</b><?php echo $row->StudentMotherName; ?></td>
								<td scope="col"><b>Mother Occupation :</b><?php echo $row->StudentMotherOccupation; ?></td>
							
							</tr>
							<tr>
								<td colspan="2"><b>Parent Email :</b><?php echo $row->StudentEmail; ?></td>
							</tr>
							<tr class="table-success">
								<th class="colspan2 table-succes" scope="col-1" colspan="2">ADDRESS</th>
							</tr>
						
							
							<tr>
								<td colspan="2">
									<b>Student Address :</b><?php echo $row->StudentAddress; ?>
								</td>
								
							</tr>
					
							<tr>
								<td>
									<b>Phone Number :</b><?php echo $row->StudentPhoneNumber; ?>
								</td>
								<td><b>Postal Code :</b><?php echo $row->AreaPostalCode; ?></td>
							</tr>
				
				</tbody>
			</table>
		</div>
	</section>

    @endforeach