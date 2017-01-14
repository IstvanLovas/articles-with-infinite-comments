window._ = require('lodash');

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
window.gsap = require('gsap');

window.Vue = require('vue');
// require('vue-resource');

import axios from 'axios';
import Form from './core/Form';

window.axios = axios;
window.Form = Form;

window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest'
};

// Vue.http.interceptors.push((request, next) => {
//     request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

//     next();
// });