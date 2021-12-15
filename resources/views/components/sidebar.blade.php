<div class="col-md-3">
    <div class="row">
        <div id="rightSidebar">

            <div class="boxHeader" width="220px">
                <span id="lblInstDesig">প্রধান শিক্ষক / অধ্যক্ষ</span>
            </div>
            <div style="text-align: center; padding-top: 7px;">
               
                    <img id="ImgInstHead" class="fancyzoom" src="{{ asset(env('FILE_PATH').'staffs/'.$result[0]->ProfilePicture) }}" style="height:200px;width:175px;" />
            </div>
            <div style="text-align: center; padding-bottom: 10px;">
                <span id="lblInstHead">
                    <h5>{{ $result[0]->TeacherName }}</h5>
                </span>
            </div>
    
        <!--
                            <div class="boxHeader" width="220px">
                                অভ্যন্তরীণ ই-সেবা
                            </div>
                            <div style="text-align: left; padding-left: 0px;">
                                <div id="box">
                                    <ul>
                                        <li><a href="" target="_blank" style="color: #FF0000;">ভর্তি পরীক্ষার আবেদন</a></li>
                                        <li><a href="" target="_blank">মাল্টিমিডিয়া ক্লাসরুম  মনিটরিং</a></li>
                                    </ul>
                                </div>
                            </div>
                   -->
        <div class="boxHeader" width="220px">
            গুরুত্বপূর্ণ লিংক
        </div>
        <div style="text-align: left;">
            <div id="box">
                <ul>
                    <li><a href="http://www.moedu.gov.bd/" target="_blank">শিক্ষা মন্ত্রণালয়</a></li>
                    <li><a href="http://www.dshe.gov.bd/" target="_blank">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                    <li><a href="http://www.banbeis.gov.bd/" target="_blank">ব্যানবেইজ</a></li>
                    <li><a href="http://www.nctb.gov.bd/" target="_blank">এনসিটিবি</a></li>
                    <li><a href="https://www.teachers.gov.bd/" target="_blank">শিক্ষক বাতায়ন</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>