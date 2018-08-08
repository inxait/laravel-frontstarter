import $ from 'jquery';

const token = document.head.querySelector('meta[name="csrf-token"]');

window.$ = window.jQuery = $;
require('bootstrap-sass');
