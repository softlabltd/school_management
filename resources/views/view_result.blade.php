
    


<?php

if ($class == "Six" || $class == "Seven" || $class == "Eight") {

	if ($check>0) {
?>
@foreach ($rows as $row)
<?php 
			$Bangla_1st = $row->Bangla_1st;
			$Bangla_2nd = $row->Bangla_2nd;
			$English_1st = $row->English_1st;
			$English_2nd = $row->English_2nd;
			$math = $row->Math;
			$science = $row->Science;
			$B_and_B = $row->B_and_B;
			$religion = $row->ReligionIslam;
			$Agriculture = $row->Agriculture;
			$ICT = $row->ICT;
			$total = $row->total;
			//$total = $Bangla_1st+$Bangla_2nd+$English_1st+$English_2nd+$math+$science+$B_and_B+$religion+$Agriculture+$ICT;
?>




			<section class="view about--part1">
				<div class="view_display" style="overflow:hidden">
					<div class="close"><i class="fas fa-times btn btn-danger"></i> </div>
					<table class="width-50 table table-sm mt-3">
						<!-- On rows -->
						<tr class="table-success">
							<td class="pl-5 pr-5" colspan="3"> <b>
									<center>
										<h4>STUDENT DETAILS</h4>
									</center>
								</b></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Name</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $row->name; ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Roll</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $row->roll; ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Class</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $row->class; ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Year</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $row->year; ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Exam Name</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $row->exam_name; ?></td>
						</tr>
						<tr class="table-success">
							<td class="pl-5 pr-5" colspan="3"> <b>
									<center>
										<h4>SUBJECT DETAILS</h4>
									</center>
								</b></td>
						</tr>
						<tr class="table-primary">
							<td class="pl-5 pr-5" colspan="2"> <b>
									<h5>SUBJECT</h5>
								</b></td>
							<td class="pl-5 pr-5" colspan="1"> <b>
									<h5>MARK</h5>
								</b></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>বাংলা ১ম</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $Bangla_1st ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>বাংলা ২য়</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $Bangla_2nd ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>ইংলিশ ১ম</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $English_1st ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>ইংলিশ ২য়</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $English_2nd ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>গনিত</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $math ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>বিজ্ঞান</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $science ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>বাংলাদেশ ও বিশ্ব পরিচয়</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $B_and_B ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>ধর্ম</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $religion ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>কৃষি</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $Agriculture ?></td>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>তথ্য ও যোগাযোগ প্রযোক্তি</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $ICT ?></td>
						</tr>
						</tr>
						<tr class="table-primar">
							<td colspan="3" class="pl-5 pr-5"> <b></b></td>
						</tr>
						</tr>
						<tr class="table-primar">
							<td class="pl-5 pr-5"> <b>Total</b></td>
							<td class="pl-5"> <b class="ml-5">:</b></td>
							<td> <?php echo $total; ?></td>
						</tr>
					</table>
                    @endforeach
				<?php	
		} else {
				?>
				<section class="view about--part1">
					<div class="view_display" style="overflow:hidden">
						<div class="close"><i class="fas fa-times btn btn-danger"></i> </div>
						<center class="mt-5">
							<h1>No Data Found!</h1>
						</center>
					</div>
				</div>
			</section>
			<?php
		}
	} elseif ($class == "Nine" || $class == "Ten") {

		if ($check>0) {
            ?>
@foreach ($rows as $row)
<?php 
				$Bangla_1st = $row->Bangla_1st;
				$Bangla_2nd = $row->Bangla_2nd;
				$English_1st = $row->English_1st;
				$English_2nd = $row->English_2nd;
				$math = $row->Math;
				$Chemistry = $row->Chemistry;
				$physics = $row->physics;
				$Biology = $row->Biology;
				$B_and_B = $row->B_and_B;
                $religion = $row->ReligionIslam;
                $Agriculture = $row->Agriculture;
                $ICT = $row->ICT;
                $total = $row->total;
				//$total = $Bangla_1st + $Bangla_2nd + $English_1st + $English_2nd + $math + $Chemistry + $physics + $Biology + $B_and_B + $religion + $Agriculture + $ICT;
			?>
				<section class="view about--part1">
					<div class="view_display" style="overflow:hidden">
						<div class="close"><i class="fas fa-times btn btn-danger"></i> </div>
						<table class="width-50 table table-sm mt-3">
							<!-- On rows -->
							<tr class="table-success">
								<td class="pl-5 pr-5" colspan="3"> <b>
										<center>
											<h4>STUDENT DETAILS</h4>
										</center>
									</b></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Name</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $row->name; ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Roll</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $row->roll; ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Class</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $row->class; ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Year</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $row->year; ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Exam Name</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $row->exam_name; ?></td>
							</tr>
							<tr class="table-success">
								<td class="pl-5 pr-5" colspan="3"> <b>
										<center>
											<h4>SUBJECT DETAILS</h4>
										</center>
									</b></td>
							</tr>
							<tr class="table-primary">
								<td class="pl-5 pr-5" colspan="2"> <b>
										<h5>SUBJECT</h5>
									</b></td>
								<td class="pl-5 pr-5" colspan="1"> <b>
										<h5>MARK</h5>
									</b></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>বাংলা ১ম</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $Bangla_1st ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>বাংলা ২য়</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $Bangla_2nd ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>ইংলিশ ১ম</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $English_1st ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>ইংলিশ ২য়</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $English_2nd ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>গনিত</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $math ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>রসায়ন</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $Chemistry ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>পদার্থ</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $physics ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>জীববিজ্ঞান</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $Biology ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>বাংলাদেশ ও বিশ্ব পরিচয়</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $B_and_B ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>ধর্ম</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $religion ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>কৃষি</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $Agriculture ?></td>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>তথ্য ও যোগাযোগ প্রযোক্তি</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $ICT ?></td>
							</tr>
							</tr>
							<tr class="table-primar">
								<td colspan="3" class="pl-5 pr-5"> <b></b></td>
							</tr>
							</tr>
							<tr class="table-primar">
								<td class="pl-5 pr-5"> <b>Total</b></td>
								<td class="pl-5"> <b class="ml-5">:</b></td>
								<td> <?php echo $total; ?></td>
							</tr>
						</table>
                        @endforeach
					<?php	
			} else {
					?>
					<section class="view about--part1">
						<div class="view_display" style="overflow:hidden">
							<div class="close"><i class="fas fa-times btn btn-danger"></i> </div>
							<center class="mt-5">
								<h1>No Data Found!</h1>
							</center>
						</div>
					</div>
				</section>
		<?php
			}
		} else {
			echo "<center><h4>NO DATA FOUND!</h4></center>";
		}
		?>



		</div>
		</section>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".close").click(function() {
					$(".view").remove();
				})
			})
		</script>