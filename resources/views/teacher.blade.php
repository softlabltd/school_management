
@extends('layout.layout')


@section('container')


<div class="col-md-9">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
        <tr>
            <td class="columnStyleTop">
                <span id="ContentPlaceHolder1_lblTitle">কর্মরত শিক্ষক-শিক্ষিকা</span>
            </td>
        </tr>
        <tr>
            <td class="columnStyleLeft">
                <div>
                    <table cellspacing="0" cellpadding="3" id="ContentPlaceHolder1_grdvTeachers" style="font-family:Noto Sans Bengali;border-collapse:collapse;margin: 0 auto;width:100%">
                        <tr style="color:Black;background-color:#F0F0F0;border-color:#CCCCCC;border-width:1px;border-style:Solid;font-family:Noto Sans Bengali;">
                            <th align="center" valign="middle" scope="col">ক্রমিক</th>
                            <th align="left" valign="middle" scope="col">ছবি</th>
                            <th align="left" valign="middle" scope="col">নাম<br />মূলপদ</th>
                            <th align="left" valign="middle" scope="col">পদবী<br />বর্তমান কর্মস্থলে যোগদান</th>
                            <th align="left" valign="middle" scope="col">নিজ জেলা<br />মোবাইল ফোন নম্বর</th>
                        </tr>
@php
    $counter = 1;
@endphp

                        @foreach ($rows as $row)
                            
                  
                            <tr>
                                <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">
                                    <?php echo $counter; ?>
                                </td>
                                <td align="left" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">
                                    <img id="ContentPlaceHolder1_grdvTeachers_imgEMp_0" class="fancyzoom" src="{{ asset(env('FILE_PATH').'staffs/'.$row->ProfilePicture) }}" style="height:60px;width:50px;" />
                                </td>
                                <td align="left" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">
                                    <span id="ContentPlaceHolder1_grdvTeachers_lblName_0">{{ $row->TeacherName }}</span><br />
                                    <span id="ContentPlaceHolder1_grdvTeachers_lblOrgPost_0">{{ $row->TeacherPosition }}</span>
                                </td>
                                <td align="left" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">
                                    <span id="ContentPlaceHolder1_grdvTeachers_lblDesig_0">{{ $row->TeacherPosition }}</span><br />
                                  
                                </td>
                                <td align="left" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">
                                    <span id="ContentPlaceHolder1_grdvTeachers_lblDist_0">{{ $row->TeacherAddress }}</span><br />
                                   
                                </td>
                            </tr>

@php
    $counter++;
@endphp

                            @endforeach
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection
