
@extends('layout.layout')


@section('container')
<pre>
<?php
// print_r($staudents);
// die();
?>
</pre>
<div class="col-md-9">
    <table cellpadding="3" cellspacing="0" style="margin: 0 auto;" width="100%">
        <tr>
            <td class="columnStyleTop">
                অধ্যয়নরত শিক্ষার্থীর সংখ্যা
            </td>
        </tr>
        <tr>
            <td class="columnStyleLeft">
                <div>
                    <table cellspacing="0" cellpadding="3" id="ContentPlaceHolder1_grdvTeachers" style="font-family:Noto Sans Bengali;font-size:11pt;border-collapse:collapse;margin: 0 auto;width:100%">
                        <tr align="center" valign="middle" style="color:#0C090A;background-color:#F2F2F2;border-color:#CCCCCC;border-width:1px;border-style:Solid;font-family:Noto Sans Bengali;font-size:9pt;">
                            <td colspan="1" style="border-width:0px;"></td>
                            <td colspan="3" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-weight:bold;">শিক্ষার্থী</td>
                            <td colspan="3" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-weight:bold;">বিভাগ</td>
                        </tr>
                        <tr align="center" valign="middle" style="color:#0C090A;background-color:#F2F2F2;border-color:#CCCCCC;border-width:1px;border-style:Solid;font-family:Noto Sans Bengali;font-size:9pt;">
                            <th align="left" valign="middle" scope="col">শ্রেণি</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">ছেলে</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">মেয়ে</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">মোট</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">বিজ্ঞান</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">ব্যব.শি</th>
                            <th align="center" valign="middle" scope="col" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;">মানবিক</th>
                        </tr>
                      

<?php 
$totalmale = intval('');
$totalfemale = intval('');
$totalscience = intval('');
$totalhumen = intval('');
$totalbusiness =  intval('');
$totastuden =  intval('');

?>

@foreach ($staudents as $list)
    <?php 
//     echo '<pre>';
// print_r($list[1]);
// echo '</pre>';

$class = $list[0]['class'];

 $totalmale += $list[1]['maleStudent'][$class];

$totalfemale += $list[1]['FemaleStudent'][$class];
$totalscience += $list[1]['scienceStudent'][$class];
$totalhumen +=  $list[1]['HumanitiesStudent'][$class];
$totalbusiness +=  $list[1]['CommerceStudent'][$class];
$totastuden +=  $list[1]['totalStudent'][$class];



?>
                        <tr>
                            <td align="left" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-family:Century Gothic;font-size:9pt;font-weight:bold;width:75px;">{{ $class }}</td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txtmale_0">{{ $list[1]['maleStudent'][$class] }}</span>
                            </td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txtfemale_0">{{ $list[1]['FemaleStudent'][$class] }}</span>
                            </td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txttotal_0">{{ $list[1]['totalStudent'][$class] }}</span>
                            </td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txtmuslim_0">{{ $list[1]['scienceStudent'][$class] }}</span>
                            </td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txthindu_0">{{ $list[1]['HumanitiesStudent'][$class] }}</span>
                            </td>
                            <td align="center" style="border-color:#CCCCCC;border-width:1px;border-style:Solid;font-size:9pt;font-weight:bold;width:30px;">
                                <span id="ContentPlaceHolder1_grdvTeachers_txtbouddho_0">{{ $list[1]['CommerceStudent'][$class] }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div>
                    <table cellspacing="0" cellpadding="0" id="ContentPlaceHolder1_grdvTotal" style="border-collapse:collapse;margin: 0 auto;">
                        <tr>
                            <td scope="col">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table cellpadding="2" cellspacing="0">
                                    <tr>
                                        <td class="firstColumn" style="border-top: 1px solid #CCCCCC;">
                                            মোট শিক্ষার্থীর সংখ্যা
                                        </td>
                                        <td colspan="3" class="secondColumn" style="border-top: 1px solid #CCCCCC;">
                                            {{ $totastuden }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            ছেলে
                                        </td>
                                        <td class="secondColumn">
                                           {{ $totalmale }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn" style="border-left: none;">
                                            মেয়ে
                                        </td>
                                        <td class="secondColumn">
                                          {{ $totalfemale }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            বিজ্ঞান বিভাগ
                                        </td>
                                        <td class="secondColumn">
                                         {{ $totalscience }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn" style="border-left: none;">
                                            ব্যবসায় শিক্ষা বিভাগ
                                        </td>
                                        <td class="secondColumn">
                                         {{ $totalbusiness }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            মানবিক বিভাগ
                                        </td>
                                        <td class="secondColumn">
                                            {{ $totalhumen }}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection
