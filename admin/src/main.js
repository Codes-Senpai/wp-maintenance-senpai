import Swal from 'sweetalert2';
window.Swal = Swal;

import 'js-loading-overlay'


import'./style.css';

jQuery(document).ready(function($){
    let settings = {
        "url": wp_maintenance_senpai_admin_main_params.ajaxurl,
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        "data": {
          "nonce": wp_maintenance_senpai_admin_main_params.nonce,
          "action": "senpai_maintenance_settings"
        }
    };

    //wp_maintenance_senpai_admin_main_params

    $('#wp_maintenance_senpai_is_activated_toggle').click(
        function () {
            $("#wp_maintenance_senpai_is_activated_toggle").attr("disabled", true);
            if ($('#wp_maintenance_senpai_is_activated_toggle').is(':checked')) {
                console.log('check');
                settings.data.active = 1;
            }   
            else {
                console.log('uncheck');
                settings.data.active = 0;
            }
            $.ajax(settings).done(function (response) {
                console.log(response);
                if(response.success){
                    location.reload();
                }
            });
    });
})