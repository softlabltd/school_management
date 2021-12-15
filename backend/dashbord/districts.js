$(document).ready(function() {

    $(".divisionAjax").on("change", function() {
        var getSelectedDivId = $(".divisionAjax").val();

        $.post("../../ajax/get_districts_core.php", { divId: getSelectedDivId }, function(result) {
            $("#districtGenerate").html(result);
        });


    });



});