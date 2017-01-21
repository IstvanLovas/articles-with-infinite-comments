<template>
	<footer id="app-footer">
		<section-row id="newsletter-sign-up">
			<template slot="header">
				<div class="col-xs-12 col-md-6 section">
					<h2>Get involved</h2>
					<h4>Be brave, stand up and be heard</h4>

					<div class="form">
						<form>
							<div class="form-group">
								<input type="text" placeholder="Name" name="name">
							</div>
							<div class="form-group">
								<input type="email" placeholder="Email" name="name">
							</div>
							<div class="form-group">
								<input type="submit" value="Sign me up">
							</div>
						</form>
					</div>
				</div>
			</template>

			<template slot="body">
				<div class="col-xs-12 col-md-6 section">
					<h2>Why?</h2>
					<h4>What this means for you</h4>

					<p>A fortnightly e–newsletter that keeps you up to date with our progress, correspondance and the latest in our  ght to combat the CQC guidance.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div>
			</template>
		</section-row>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<hr>
				</div>
			</div>
		</div>

		<section-row id="other-ways-to-help">
			<template slot="header">
				<div class="col-xs-12 col-md-6 section">
					<h2>Other ways to help</h2>

					<p>Dummy text. Giving hint to potential content.
					You can sign up to a government petition. 10,000 gets us noticed. 100,000 gets us talked about.</p>

					<a href="/goverment_petition" class="text-uppercase" title="Sign the government petition">Goverment petition</a>
				</div>
			</template>

			<template slot="body">
				<div class="col-xs-12 col-md-6 section">
					<join-the-conversation></join-the-conversation>
				</div>
			</template>
		</section-row>

	    <div class="get-involved-and-query">
	        <div class="left hidden-xs"></div>
	        <div class="right hidden-xs"></div>
	        <div class="container">
	            <div class="row flex-wrapper">
	                
	                <div class="col-xs-12 col-md-6 get-involved section">
	                    <div>
	                        <h2>Get involved</h2>
	                        <h4>Be brave, stand up and be heard</h4>
	                    </div>
	                        
	                    <div class="cta-button">
	                        <a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Sign up here</a>
	                    </div>
	                    
	                    <join-the-conversation></join-the-conversation>
	                </div>
	    
	                <div class="col-xs-12 col-md-6 query section">
	                    <div>
	                    	<h2>Query?</h2>
	                    	<h4>Get in touch</h4>
	                    </div>
	                    
	                    <a 	href="mailto:info@createdbyparents.com"
	                    	title="info@createdbyparents.com"
	                    	class="email-us"
	                    >info@createdbyparents.com</a>
	                    
	                    <footer class="text-uppercase">
	                        <span>View our privacy policy / </span>
	                        <span>© Created By Parents 2017 / </span>
	                        <span>Designed by Jake Jennings </span>
	                    </footer>
	                </div>
	        
	            </div>
	        </div>
	    </div>
	</footer>
</template>

<script>
	import SectionRow from './SectionRow.vue'
	import JoinTheConversation from './JoinTheConversation.vue'

	export default {
		components:{
			SectionRow,
			JoinTheConversation
		},
		mounted() {
            this.$nextTick(() => {
               this.setOffset()
                $(window).on('resize',() => {
                    this.setOffset()
                })
            })
        },
        methods: {
        	setOffset() {
        		 TweenLite.set('.query',{
                    x:$('.get-involved-and-query .flex-wrapper').offset().left
                })
        	}
        }
	}
</script>