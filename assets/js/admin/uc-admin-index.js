(function ($) {
    $(".js-reflow-items").on('click', function(event) {
        event.preventDefault();
        $.post("admin-ajax.php?action=ucwp_reflow_items", {}, function(response) {
            alert(response);
        });
    });
    $(".ucwp_enable_ultracart_analytics").on('change', function(event) {
        if (event.target.checked === true) {
            $('.ucwp_enable_ultracart_analytics_recording_label').removeClass('disabled');
            $('.ucwp_enable_ultracart_analytics_recording').prop('disabled', false);
        } else {
            var recordingCheckbox = $('.ucwp_enable_ultracart_analytics_recording');
            $('.ucwp_enable_ultracart_analytics_recording_label').addClass('disabled');
            recordingCheckbox[0].checked = false;
            recordingCheckbox.prop('disabled', true);
        }
    });
    $(".js-ucwp-save-options").on('click', function(event) {
        event.preventDefault();
        var data = {
            // 'ucwp_inject_affiliate_tracking_script': $('.ucwp_inject_affiliate_tracking_script').is(':checked'),
            'ucwp_disable_passive_branding': $('.ucwp_disable_passive_branding').is(':checked'),
            'ucwp_enable_ultracart_analytics': $('.ucwp_enable_ultracart_analytics').is(':checked'),
            'ucwp_enable_ultracart_analytics_recording': $('.ucwp_enable_ultracart_analytics_recording').is(':checked'),
            'ucwp_secure_host_name': $('.ucwp_secure_host_name').val(),
        };

        Array.prototype.forEach.call(
            document.getElementsByClassName('ucwp_view_cart_menu'),
            function(el) { data[el.name] = el.checked;}
        );

        Array.prototype.forEach.call(
            document.getElementsByClassName('ucwp_checkout_menu'),
            function(el) { data[el.name] = el.checked;}
        );

        Array.prototype.forEach.call(
            document.getElementsByClassName('ucwp_checkout_menu_icon_only'),
            function(el) { data[el.name] = el.checked;}
        );

        Array.prototype.forEach.call(
            document.getElementsByClassName('ucwp_view_cart_menu_icon_only'),
            function(el) { data[el.name] = el.checked;}
        );

        $.post("admin-ajax.php?action=ucwp_save_options", data, function(response) {
            alert(response);
        });
    });
})(jQuery);