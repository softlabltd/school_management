<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="    font-family: 'bangla',sans-serif;" >
    


    <style>
        img {}

        .logo {
            width: 17%;
            float: left;
        }

        .logo img {
            width: 100%;
        }

        .schoolname {
            width: 80%;
            float: right;
        }

        .detals {
            width: 78%;
            float: left;
        }

        .image {
            width: 20%;
            float: right;
        }
        h2.sn_bn {
            font-size: 25px !important;
        }


        h2 {
            margin: 0;
        }

      
        .student_image {
    height: 160px;
    width: 210px;
    margin: 0 auto;

}
.adminYear {
    width: 200px;
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    padding: 6px;
    border: 3px solid black;
    margin: 0 auto;
    margin-top: 15px;
}

.student_detail {
    overflow: hidden;
    width: 100%;
    font-size: 18px;
}

.border_admit {
    border: 3px solid black;
    overflow: hidden;
}

.border_admit2 {
    border: 9px solid #ededed;
    overflow: hidden;
}

.border_admit3 {
    border: 3px solid black;
    overflow: hidden;
    padding: 20px;
}

.admisionId {
    width: 250px;
    overflow: hidden;
    border: 3px solid #efa126;
    font-size: 18px;
    font-weight: 700;
    padding: 12px 8px;
    background: #fbfff0;
}

span.applicationId {
    border: 3px solid #efa126;
    padding: 7px 10px;
}
.admisionId {
    float: right;
}
span.addborder {
    border-right: 2px solid #efa126;
    border-top: 2px solid #efa126;
    border-bottom: 2px solid #efa126;
    padding: 2px 5px;
}

span.addborder:first-child {
    border-left: 2px solid #efa126;
}
    </style>
    <div class="admin">
        <div class="border_admit">
        <div class="border_admit2">
        <div class="border_admit3">
            <div class="detals">
                <div class="logo"><img src="{{ $govlogo }}" alt=""></div>
                <div class="schoolname">
                    <h2 class="sn_bn"> টেপ্রীগঞ্জ মডেল স্কুল এন্ড কলেজ </h2>
                    <h2 class="sn_en"> Tepriganj Model School And College
                    </h2>

<div class="adminYear">

    Admin Card : 2021

</div>

                </div>

<div class="student_detail">

    <p>

        Student's Name : <?php echo $row[0]->StudentName; ?> Class : <?php echo $row[0]->StudentClass; ?>
    </p>

</div>


            </div>
            <div class="image">
                <div class="student_image">

                    <img width="210px" height="165px" src="{{ $StudentPicture }}" alt="">
                </div>

            </div>



<div class="admisionId">
    Application ID <span id="applicationId">   
   
 {{ $row[0]->AdmissionID}}

    </span>
    
    </div>


        </div>
        </div>
    </div>
    </div>
</body>
</html>