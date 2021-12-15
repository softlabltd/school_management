$(document).ready(function() {

    $("li#change_nf_status").click(function() {

        var account_id = $(this).data("ac_id");

        $.post("ajax/notification_status_change.php", {
                current_account_id: account_id,
            },
            function(result) {
                var theresponse = result;
                if (theresponse == 1) {

                    $("span#notification_count_badge").remove();

                }
            });


    });


    //POST COMMENT AJAX QUERY

    $("input#submitVidComment").click(function() {

        var getFormData = $("form#videoCommentForm").serialize();

        //post query 

        $.post("ajax/video_comment_core.php", (getFormData), function(commentResult) {

            var commentResultValue = commentResult;
            if (commentResultValue == 1) {

                //query again

                $.post("ajax/watch_tutorials_comments_template.php", (getFormData), function(AftercommentResult) {

                    $(".video_comment_list_ajax").html(AftercommentResult);
                    $("form#videoCommentForm")[0].reset();

                });

                //query again end 


            }

        });


    });



    //POST COMMENT AJAX QUERY END	
});