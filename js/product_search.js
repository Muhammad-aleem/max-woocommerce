jQuery(document).ready(function ($) {
    var productsearch = function (fromdata, action) {
        $.ajax({
            url: my_ajax_object.ajaxurl,
            type: "POST",
            data: {
                action: action,
                data: fromdata,
                security: my_ajax_object.ajax_nonce_security,

            },
            success: function (response) {
                $('.Search_result_wrap').html(response);
            },
            error: function () {
                console.log('Some problem');

            }


        });

    };
    // keyup proess
    $('#widget_search_id').keyup(function () {
        $(document).trigger('productSearch');
    });

    $(document).on('productSearch', function () {
        var searchbox = $('#widget_search_id').val();
        $('.Search_result_wrap').html('<div class="spinner_wrap"> <div class="fa-3x"><i class="fas fa-spinner fa-spin"></i></div></div>');
        if (searchbox.length > 2) {
            var fromdata = {
                'query_text': searchbox,
                'per_page': $('#search_wid_per_id').val()
            };
            productsearch(fromdata, 'search_wid_action_name');


        }
    });
    // end keyup process
    //  keydown process
    $('#widget_search_id').keydown(function () {
        $(document).trigger('productSearch');
    });
    //  keydown process
    // on content click
    $(document.body).on('click', '.main-container' ,function(){
       $('.Search_results').slideUp();
    });
    $(document.body).on('click', '.widget_search' ,function(e){
        e.stopPropagation();
     });
    // end


});