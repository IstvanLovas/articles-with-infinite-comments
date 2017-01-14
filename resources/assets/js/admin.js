require('./bootstrap');

import Banner from './admin/components/Banner.vue';
import Fact from './admin/components/Fact.vue';
import TheIssue from './admin/components/TheIssue.vue';
import WhyItMatters from './admin/components/WhyItMatters.vue';
import OurGoals from './admin/components/OurGoals.vue';
import OurAims from './admin/components/OurAims.vue';
import OurCurrentChallenge from './admin/components/OurCurrentChallenge.vue';
import WhyUs from './admin/components/WhyUs.vue';
import GetTheLatest from './admin/components/GetTheLatest.vue';
import KeyFactsAboutIssue from './admin/components/KeyFactsAboutIssue.vue';

window.Event = new Vue();

import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

const admin = new Vue({
    components:{
        Banner,
        Fact,
        TheIssue,
        WhyItMatters,
        OurGoals,
        OurAims,
        OurCurrentChallenge,
        WhyUs,
        GetTheLatest,
        KeyFactsAboutIssue
    },
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
