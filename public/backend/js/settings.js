function insert(url) {
    $.ajax({
        url: url,
        method: "GET",
        success: function(data) {
            $("#employee_detail").html(data);
            $("#dataModal").modal("show");
        },
    });
}

function view(id, url) {

    $.ajax({
        url: url,
        method: "GET",
        data: {
            id: id,

        },
        success: function(data) {
            $("#employee_detail").html(data);
            $("#dataModal").modal("show");
        },
    });

}




// Delete
function deleteData(id, url, tableName) {
    var deleletr = ".delete" + id;

    var confirmalert = confirm("Are you sure?");
    if (confirmalert == true) {
        // AJAX Request
        $.ajax({
            url: url,
            type: "POST",
            data: {
                id: id,
                tableName: tableName,
            },
            success: function(response) {
                if (response == 1) {
                    // Remove row from HTML Table
                    $(deleletr).closest("tr").css("background", "tomato");
                    $(deleletr)
                        .closest("tr")
                        .fadeOut(800, function() {
                            $(this).remove();
                        });
                } else {
                    alert(response);
                }
            },
        });
    }
}