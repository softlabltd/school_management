<section class="view about--part1">
    <div class="view_display" style="overflow:hidden">
        <div class="close"><i class="fas fa-times btn btn-danger"></i> </div>


        <?php


if ($check>0) {

		$total = $rows[0]->total_mark;
	$result = json_decode($rows[0]->result);
?>




        @foreach ($result as $row)



            <?php
				
				if($roll==$row->StudentRoll) {
				
				
				
				
				?>

            <table class="width-50 table table-sm mt-3">
                <!-- On rows -->
                <tr class="table-success">
                    <td class="pl-5 pr-5" colspan="3"> <b>
                            <center>
                                <h4>শিক্ষারথীর বিবরণ</h4>
                            </center>
                        </b></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>নাম</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $row->StudentName; ?></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>শিক্ষারথীর আইডি নাম্বার</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $row->StudentRoll; ?></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>শ্রেণী</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $rows[0]->sctudent_class; ?></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>সাল</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $rows[0]->year; ?></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>পরীক্ষার নাম</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> সাপ্তাহিক পরীক্ষা</td>
                </tr>
                <tr class="table-success">
                    <td class="pl-5 pr-5" colspan="3"> <b>
                            <center>
                                <h4>ফলাফল</h4>
                            </center>
                        </b></td>
                </tr>
                <tr class="table-primary">
                    <td class="pl-5 pr-5" colspan="2"> <b>
                            <h5>বিষয়</h5>
                        </b></td>
                    <td class="pl-5 pr-5" colspan="1"> <b>
                            <h5>নাম্বার</h5>
                        </b></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b>Total</b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $total; ?></td>
                </tr>
                <tr class="table-primar">
                    <td class="pl-5 pr-5"> <b><?php echo $rows[0]->subject; ?></b></td>
                    <td class="pl-5"> <b class="ml-5">:</b></td>
                    <td> <?php echo $row->mark; ?></td>
                </tr>
                <tr class="table-primar">
                    <td colspan="3" class="pl-5 pr-5"> <b></b></td>
                </tr>
            </table>
            <?php } ?>
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
    
</section>

<?php
	}
	?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".close").click(function() {
            $(".view").remove();
        })
    })
</script> 

</div>
</section>
