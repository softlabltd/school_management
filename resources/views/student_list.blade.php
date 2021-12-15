
@extends('layout.layout')


@section('container')
<div class="col-md-9">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
        <tr>
            <td colspan="2" class="columnStyleTop">
                অধ্যয়নরত শিক্ষার্থীর তালিকা
            </td>
        </tr>
        <form id="form" enctype="multipart/form-data" onsubmit="return false" method="POST" action="">
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    Class :
                </td>
                <td class="columnStyleRight">
                    <select name="class" onchange="changefunction(this.value)" id="ContentPlaceHolder1_cmbClass" class="form-control">
                        <option selected="selected" value="Select Class">Select Class</option>
                        <option>Play</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                        <option>Four</option>
                        <option>Five</option>
                        <option>Six</option>
                        <option>Seven</option>
                        <option>Eight</option>
                        <option>Nine</option>
                        <option>Ten</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    Year :
                </td>
                <td class="columnStyleRight">

<input type="text" name="year" class="form-control" value="<?php echo date('Y') ?>" readonly>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button name="save_btn" id="save_btn" onclick="formSubmit();" class="btn btn-info">SEARCH</button>
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
