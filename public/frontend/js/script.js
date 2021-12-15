$("button#show_spin").css("display", "none");

function formSubmit() {
    $("button#show_spin").css("display", "block");
    $("#save_btn").css("display", "none");
    $("button#show_spin").html('<center><img id="spiner"  style="width:30px" src="frontend/spinner.gif" alt="" /></center>');
    $.ajax({
        type: 'GET',
        url: '/total_student',
        data: $("#form").serialize(),
        success: function(response) {
            setTimeout(function() {
                $("button#show_spin").css("display", "none");
                $("#save_btn").css("display", "block");
                $("#show").html(response);
            }, 1000)
        },
    });

}


function changefunction(data) {
    var req = new XMLHttpRequest();
    req.open('POST', 'find_roll.php?datavalue=' + data, true);
    req.send();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById("roll").innerHTML = req.responseText;
        }
    };
}
$("button#show_spin").css("display", "none");

function formSubmit2() {
    $("button#show_spin").css("display", "block");
    $("#save_btn").css("display", "none");
    $("button#show_spin").html('<center><img id="spiner"  style="width:30px" src="frontend/spinner.gif" alt="" /></center>');
    $.ajax({
        type: 'GET',
        url: '/view_result',
        data: $("#form").serialize(),
        success: function(response) {
            setTimeout(function() {
                $("button#show_spin").css("display", "none");
                $("#save_btn").css("display", "block");
                $("#show").html(response);
            }, 1000)
        },
    });

}



function changefunction(data) {
    var req = new XMLHttpRequest();
    req.open('POST', 'find_roll.php?datavalue=' + data, true);
    req.send();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById("roll").innerHTML = req.responseText;
        }
    };
}
$("button#show_spin").css("display", "none");

function formSubmit0() {
    $("button#show_spin").css("display", "block");
    $("#save_btn").css("display", "none");
    $("button#show_spin").html('<center><img id="spiner"  style="width:30px" src="frontend/spinner.gif" alt="" /></center>');
    $.ajax({
        type: 'GET',
        url: '/weakly_result_data',
        data: $("#form").serialize(),
        success: function(response) {
            setTimeout(function() {
                $("button#show_spin").css("display", "none");
                $("#save_btn").css("display", "block");
                $("#show").html(response);
            }, 1000)
        },
    });

}