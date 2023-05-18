import './bootstrap';

import Alpine from 'alpinejs';
import 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js';
import 'https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js';
import Swal from 'sweetalert2';
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import Home from './Home.vue';


window.Alpine = Alpine;

Alpine.start();

const app = createApp({});

app.component('home-component', Home);
app.mount("#app");

$(document).ready(function () {
    $('#users-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});
$(document).ready(function () {
    $('#academics-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});
$(document).ready(function () {
    $('#administratives-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#post_students-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#pre_students-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#researchers-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#part_times-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#publications-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#careers-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#dependencies-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#centers-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});

$(document).ready(function () {
    $('#departments-table').DataTable({
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },


    });
});


$(document).on('click', '.delete-user', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    Swal.fire({

        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url: '/users/' + id,
                data: {
                    id: id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: '¡Usuario eliminado correctamente!',
                        timer: 1500
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 1000); // delay for half a second
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
});



