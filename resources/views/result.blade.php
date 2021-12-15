
@extends('layout.layout')


@section('container')
<div class="col-md-9">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
        <tr>
            <td colspan="2" class="columnStyleTop">
                পরীক্ষার ফলাফল
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    Class :
                </td>
                <td class="columnStyleRight">
                    <select name="class" id="ContentPlaceHolder1_cmbClass" class="form-control">
                        <option selected="selected" value="Select Class">Select Class</option>
                        <option value="Six">Six</option>
                        <option value="Seven">Seven</option>
                        <option value="Eight">Eight</option>
                        <option value="Nine">Nine</option>
                        <option value="Ten">Ten</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    roll :
                </td>
                <td class="columnStyleRight">
                    <input type="text" name="roll" onchange="" id="roll" class="form-control" />
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    Year :
                </td>
                <td class="columnStyleRight">
                    <select name="year" onchange="year(this.value)" id="ContentPlaceHolder1_cmbShift" class="form-control">
                        <option selected="selected" value="Select Shift">Select Year</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    Exam Name :
                </td>
                <td class="columnStyleRight">
                    <select name="exam_name" onchange="" id="ContentPlaceHolder1_cmbSchool" class="form-control">
                        <option selected="selected" value="">Select Exam Name</option>
                        <option>ADMITION TEST RESULT</option>
                        <option>First Terminals Examination</option>
                        <option>Second Terminals Examination</option>
                        <option>Annual Examination</option>
                        <option>Test Examination</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit2();" class="btn btn-info">SEARCH</button>
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
