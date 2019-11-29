jQuery(document).ready(function ($) {


    // console.log('i m  ready');

    var productfilter = function (fromdata, action) {
        $.ajax({
            url: my_ajax_object.ajaxurl,
            type: "POST",
            data: {
                action: action,
                data: fromdata,
                security: my_ajax_object.product_filter_security,

            },
            success: function (response) {
                $('ul.products').html(response);
            },
            error: function () {
                console.log('Some problem');

            }
        });
    };
    // end ajax


    $(document).on('productfilter', function () {
        var searchbox = $('#widget_search_id').val();
        var fromdata = {
            'minprice': $('#minprice').val(),
            'maxprice': $('#maxprice').val(),
            'is_archive': $('#is_archive').val(),
        };
        productfilter(fromdata, 'filter_wid_action_name');
    });

    //  keydown process
    $('#widget_search_id').keydown(function () {

    });
    //  keydown process
    $("#slider-range").slider({
        stop: function (event, ui) {
            $(document).trigger('productfilter');
        }
    });


});