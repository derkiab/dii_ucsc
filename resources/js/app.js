import './bootstrap';

import Alpine from 'alpinejs';
import 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js';
import 'https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js';
window.Alpine = Alpine;

Alpine.start();

$(document).ready(function() {
    $('#myTable').DataTable();
});

