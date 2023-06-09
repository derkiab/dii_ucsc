import './bootstrap';

import Alpine from 'alpinejs';
import 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js';
import DataTables from 'datatables.net';
import { Select, initTE, Ripple } from "tw-elements";

  
  
import Swal from 'sweetalert2';




initTE({ Ripple });
initTE({ Select });
$(document).ready(function () {
    window.Alpine = Alpine;

    Alpine.start();



    new DataTables('#careers-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#users-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#academics-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });

    new DataTables('#academics-table2', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#administratives-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#post_students-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#pre_students-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#researchers-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#centers-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#part_times-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#dependencies-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#departments-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
    });
    new DataTables('#publications-table', {
        dom: 'lfrtip',

        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
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

    $(document).on('click', '.delete-dependency', function (e) {
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
                    url: '/dependencies/' + id,
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

    
});





