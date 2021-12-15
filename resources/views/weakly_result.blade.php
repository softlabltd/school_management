
@extends('layout.layout')


@section('container')
<div class="col-md-9">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
        <tr>
            <td colspan="2" class="columnStyleTop">
                সাপ্তাহিক পরীক্ষার ফলাফল
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    শ্রেণি :
                </td>
                <td class="columnStyleRight">
                    <select name="class" id="ContentPlaceHolder1_cmbClass" class="form-control">
                        <option selected="selected" value="">শ্রেণি নির্বাচন করুন</option>
                     
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
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    রোল নাম্বার :
                </td>
                <td class="columnStyleRight">
                    <input type="text" name="roll" placeholder="রোল (ইংলিশ এ)" onchange="" id="roll" class="form-control" />
                </td>
            </tr>
         
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    বিষয় :
                </td>

               
                <td class="columnStyleRight">
                    <select id="ContentPlaceHolder1_cmbShift" class="form-control" name="subject" id="">
                     @foreach ($subject as $row)
                         
                 
                            <option value="<?php echo  $row->subject ?>"><?php echo  $row->subject ?></option>
                            @endforeach
                    </select>
                </td>
                
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    পরীক্ষার তারিখ:
                </td>

                
                <td class="columnStyleRight">
                    <select id="ContentPlaceHolder1_cmbShift" class="form-control" name="exam_date" id="">
                     @foreach ($date as $row)
                         
                 
                            <option value="<?php echo  $row->date ?>"><?php echo  $row->date ?></option>
                            @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit0();" class="btn btn-info">SEARCH</button>
                        <button class="btn btn-info" id="show_spin"></button>
                    </center>
                </td>
            </tr>
        </form>
        <tr>
            <td colspan="2" class="columnStyleRight">
            </td>
        </tr>
    </table>
    <div id="show"></div>
</div>

@endsection
