

@extends('layout.layout')


@section('container')
<style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

    * {
        padding: 0;
        margin: 0;
    }

    body {
        background: #583672;
        font-family: "Roboto", sans-serif;
    }

    /*   .container1 {
    width: 700px;
    background: #f3eff5;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 450px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 125px 3px #00000059;
}
*/
    .leftSide {
        width: 100%;
        float: left;
    }

    .returnHome {
        padding-top: 15px;
        padding-left: 21px;
    }

    .returnHome i {
        border: 1px solid #00000073;
        width: 15px;
        text-align: center;
        border-radius: 50%;
        color: #00000073;
    }

    label {
        font-size: 13px;
    }

    .form {
        width: 100%;
        float: left;
        text-align: center;
        padding: 80px 0px;
    }

    .loginHeader {
        margin-top: 99px;
    }

    .loginHeader h2 {
        color: #fff2f2;
        margin-bottom: 21px;
    }

    .loginHeader p {
        color: #e2d8d8;
        font-size: 15px;
    }

    input.input:focus {
        outline: navajowhite;
    }

    .input {
        border-bottom: 1px solid #a7a1a1;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        width: 60%;
        margin: auto;
        margin-top: 30px;
        padding: 10px;
        /*   background: #f3eff5;*/
    }

    input[type="submit"] {
        width: 47%;
        background: #783672;
        margin-top: 77px;
        padding: 13px;
        border-radius: 3px;
        color: white;
        font-weight: 700;
        border: 0;
        cursor: pointer;
        box-shadow: 0px 7px 12px 0px #0000007a;
    }

    input[type="submit"]:focus {
        outline: navajowhite;
    }

    .inputValue {
        border-bottom: 1px solid blue;
        color: blue;
    }

    .inputValue::-webkit-input-placeholder {
        color: blue;
    }

    .error {
        border-bottom: 1px solid red;
        color: red;
    }

    .error::-webkit-input-placeholder {
        color: red;
    }

    .success {
        border-bottom: 1px solid #28a745;
        color: #28a745;
        ;
    }

    .success::-webkit-input-placeholder {
        color: #28a745;
        ;
    }
</style>

    <div class="col-md-9">
        <div class="container1">
            <div class="leftSide">
                <div class="form">
                    <?php
                    if (isset($_REQUEST["action"])) {
                        echo '<span style="color:red;">Email or Password has Incorrect! <a href="#">Forget Password</a></span>';
                    }
                    ?>
                    <h3>SIGN IN</h3>
                    <form action="{{ url('login/submit') }}" method="POST">
                        @csrf
                        <input class="input" type="text" name="email" id="email" placeholder="Input your email" />
                        <input class="input" type="password" name="password" placeholder="Input your password" />
                        <input type="submit" name="submit" value="LET'S GO" />
                    </form>
                </div>
            </div>
        </div>
    </div>



<script>
    $(document).ready(function($) {
        $(".input").focus(function() {
            $(this).removeClass('error');
            $(this).removeClass('success');
            $(this).addClass("inputValue");
        }).blur(function() {
            if ($(this).val() == '') {
                $(this).removeClass("inputValue");
                $(this).removeClass('success');
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
                $(this).removeClass("inputValue");
                $(this).addClass('success');
            }
        })
    });
</script>
@endsection
