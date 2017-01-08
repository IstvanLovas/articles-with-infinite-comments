require('./bootstrap');

window.Event = new Vue();

import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

import AppContainer from './AppContainer.vue';
import JoinTheConversation from './components/JoinTheConversation.vue';
import Masthead from './components/Masthead.vue';
import SectionRow from './components/SectionRow.vue';
import BlockQuote from './components/BlockQuote.vue';
import CaseStudy from './components/CaseStudy.vue';
import AppHeader from './components/AppHeader.vue';
import AppFooter from './components/AppFooter.vue';
import CreateArticle from './components/layout/CreateArticle.vue';

const app = new Vue({
    el: '#app',
    components: {
        AppContainer,
        JoinTheConversation,
        AppHeader,
        AppFooter,
    	Masthead,
    	SectionRow,
        BlockQuote,
        CaseStudy,
    	CreateArticle
    },
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
    },
    methods: {
        openLoginWindow() {
            Event.$emit('loginWindowIsOpen');
        }
    }
});
