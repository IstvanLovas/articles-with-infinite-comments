window._ = require('lodash');

window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
window.gsap = require('gsap');

window.Vue = require('vue');
require('vue-resource');
window.axios = require('axios');

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});