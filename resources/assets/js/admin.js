require('./bootstrap');

import BlockQuote from './components/BlockQuote.vue';
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
import CreateCaseStudyForm from './admin/partials/CreateCaseStudyForm.vue';
import EditCaseStudyForm from './admin/partials/EditCaseStudyForm.vue';
import CreateArticleForm from './admin/partials/CreateArticleForm.vue';
import EditArticleForm from './admin/partials/EditArticleForm.vue';

window.Event = new Vue();

import autosize from 'autosize';

autosize(document.querySelectorAll('textarea'));

const admin = new Vue({
    components:{
        BlockQuote,
        Banner,
        Fact,
        TheIssue,
        WhyItMatters,
        OurGoals,
        OurAims,
        OurCurrentChallenge,
        WhyUs,
        GetTheLatest,
        KeyFactsAboutIssue,
        CreateCaseStudyForm,
        EditCaseStudyForm,
        CreateArticleForm,
        EditArticleForm
    },
    el: '#admin',
    mounted() {
        this.$nextTick(() => {
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
    }
});
