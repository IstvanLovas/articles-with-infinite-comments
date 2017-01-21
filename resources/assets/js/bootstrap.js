window._ = require('lodash');

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
window.gsap = require('gsap');

window.Vue = require('vue');

import axios from 'axios';
import Form from './core/Form';
import { default as swal } from 'sweetalert2';

window.swal = swal;
window.axios = axios;
window.Form = Form;

window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest'
};