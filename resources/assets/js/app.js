require('./bootstrap');

window.Event = new Vue();

import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

import AppContainer from './AppContainer.vue';
import ArticleRow from './components/ArticleRow.vue';
import Masthead from './components/Masthead.vue';
import SectionRow from './components/SectionRow.vue';
import BlockQuote from './components/BlockQuote.vue';
import CaseStudy from './components/CaseStudy.vue';
import AppFooter from './components/AppFooter.vue';
import MenuButton from './components/MenuButton.vue';
import JoinTheConversation from './components/JoinTheConversation.vue';

const app = new Vue({
    el: '#app',
    components: {
        AppContainer,
        ArticleRow,
        JoinTheConversation,
    	Masthead,
    	SectionRow,
        BlockQuote,
        CaseStudy,
        AppFooter,
        MenuButton
    },
    mounted() {
        this.$nextTick(() => {
            let controller = new ScrollMagic.Controller();
            let scene = new ScrollMagic.Scene({
                triggerHook: 0,
                triggerElement: "#main-header"
            })
            .setPin("#main-header")
            .addTo(controller);

            let headerHeight = $('#main-header').height();

            $(window).on('resize',() => {
                headerHeight = $('#main-header').height();
            });

    	    // Smooth Scroll
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                let target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - headerHeight
                        },1000);
                        return false;
                    }
                }
            });
        });
    },
    methods: {
        openLoginWindow() {
            Event.$emit('loginWindowIsOpen');
        }
    }
});
