import Swal from 'sweetalert2';
window.Swal = Swal;


import 'js-loading-overlay'

import'./style.css';

const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    /* timer: 1500,
    timerProgressBar: true, */
  });
  window.Toast = Toast;

jQuery(document).ready(function($){
    console.log('main ready');
    Toast.fire({
        icon: 'warning',
        title: 'Maintenance mode is enabled, only admins can see front-end all other visitors are shown the maintenace mode banner.'
        });
})