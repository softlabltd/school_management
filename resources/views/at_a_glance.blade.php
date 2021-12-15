
@extends('layout.layout')


@section('container')




    <div class="col-md-9">
        <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
            <tr>
                <td colspan="4" class="columnStyleTop">
                    এক নজরে বিদ্যালয়ের পরিচিতি
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    বিদ্যালয়ের নাম :
                </td>
                <td class="columnStyleRight" colspan="3">
                    <span id="ContentPlaceHolder1_txtSchoonNameBn">টেপ্রীগঞ্জ মডেল স্কুল অ্যান্ড কলেজ</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 10pt;">
                    SCHOOL NAME :
                </td>
                <td class="columnStyleRight" colspan="3" style="font-family: Century Gothic; font-size: 10pt;">
                    <span id="ContentPlaceHolder1_txtSchoonNameEn">Tepriganj Model School And Collage.</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    গ্রাম/বাড়ী ও সড়কের বিবরণ :
                </td>
                <td class="columnStyleRight" colspan="3">
                    <span id="ContentPlaceHolder1_txtVillage">মাদ্রাসা সড়ক,টেপ্রীগঞ্জ</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    ওয়ার্ড নম্বর :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtWardNo">৯</span>
                </td>
                <td class="columnStyleLeft" style="border-left: none;">
                    ইউনিয়ন :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtCityCorp">টেপ্রীগঞ্জ</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    পোস্ট অফিস :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtPostOffice">টেপ্রীগঞ্জ</span>
                </td>
                <td class="columnStyleLeft" style="border-left: none;">
                    পোস্ট কোড :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtPostCode">৫০২০</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    উপজেলা :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtThana">দেবীগঞ্জ</span>
                </td>
                <td class="columnStyleLeft" style="border-left: none;">
                    জেলা :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtUpazila">পঞ্চগড়</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    বিভাগ :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtDistrict">রংপুর</span>
                </td>
                <td class="columnStyleLeft" style="border-left: none;">
                    ফোন-নাম্বার:
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtDivision">০১৭৩৭৭৪৯৪০৮</span>
                </td>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    E-Mail :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtTelephone">tmschoolandcollege@gmail.com</span>
                </td>
                <td class="columnStyleLeft" style="font-family: Century Gothic; font-size: 11pt;
                border-left: none;">
                    শিক্ষার্থীর সংখ্যা :
                </td>
                <td class="columnStyleRight">
                    <a href="student_at_a_glance.php" style="text-decoration: none; color: #FF0000; font-weight: bold;">
                        <span id="ContentPlaceHolder1_txtTotalStudents"></span></a>
                </td></span>
            </tr>
            <tr>
                <td class="columnStyleLeft">
                    বিদ্যালয়ের শিফট :
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtSchoolShift">দিবা</span>
                </td>
                <td class="columnStyleLeft" style="border-left: none;">
                </td>
                <td class="columnStyleRight">
                    <span id="ContentPlaceHolder1_txtSchoolType"></span>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    </div>



@endsection
