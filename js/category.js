jQuery(document).ready(function ($) {
    // price_filter


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
        // productfilter(fromdata, 'filter_wid_action_name');
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

    //  end price filer




    // category filter
    var selectedcatarray = [];
    var ii = 0;



    $('.pro_cat_list li .pro_cat').on('click', function () {

        $(".pro_cat_list li .pro_cat").each(function () {
            if ($(this).is(':checked')) {
                selectedcatarray[ii] = $(this).val(),
                    ii++;
            }
        });
        if (selectedcatarray.length == 0) {
            var selectedcat = 'empty';

        } else {
            var selectedcat = selectedcatarray.join(',');

        }
        console.log(selectedcat);
        // console.log(selectedcatarray);
        // $(document).trigger('productfilter');
    });

    // end category filter
});