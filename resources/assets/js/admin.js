require('./bootstrap');

window.Event = new Vue();

import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

const admin = new Vue({
    el: '#admin',
    mounted() {
        this.$nextTick(() => {
    	   // Smooth Scroll
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                let target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        },1000);
                        return false;
                    }
                }
            })
        })
    }
});
