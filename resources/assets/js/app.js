require('./bootstrap');

import CreateArticle from './components/CreateArticle.vue';
import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

const app = new Vue({
    el: '#app',
    components: {CreateArticle},
    mounted() {
        this.$nextTick(function () {
        });
    }
});
