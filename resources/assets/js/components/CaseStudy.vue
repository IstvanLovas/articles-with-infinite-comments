<template>
	<article :class="{isOpen: isOpen}">
		<div class="flex">

			<div class="case-content">
				<div class="row">
					<div class="col-md-12">
						<slot name="case-header"></slot>
					</div>
				</div>
				
				<div class="row">
					<block-quote class="col-xs-12 col-sm-10 col-md-12">
						<template slot="text">
							<slot name="quote"></slot>
						</template>
					</block-quote>
				
					<div class="col-xs-8 col-sm-7 case-fact">
						<slot name="fact"></slot>
							<button
								v-show="! isOpen"
								class="btn btn-primary text-uppercase"
								@click="toggleIsOpen"
							>
								<slot name="button-text-read"></slot>
							</button>
					</div>
				</div>

				<transition name="fade" mode="out-in">
				    <div v-show="isOpen" class="row case-texts">
						<div class="col-xs-12 case-text-left">
							<slot name="case-text-left"></slot>
						</div>
						<div class="col-xs-12 case-text-right">
							<slot name="case-text-right"></slot>
						</div>
						<div class="col-xs-12">
							<button
								class="btn btn-primary text-uppercase"
								@click="toggleIsOpen"
							>
								<slot name="button-text-close"></slot>
							</button>
						</div>
					</div>
				</transition>
			</div>
			
			<div class="case-image">
				<slot name="case-image"></slot>
			</div>

		</div>
	</article>
</template>

<script>
	import BlockQuote from './BlockQuote.vue'

	export default {
		components: {
			BlockQuote
		},
		data() {
			return {
				isOpen:false
			}
		},
		methods: {
			toggleIsOpen() {
				if(this.isOpen) {
					$('html, body').animate({
				        scrollTop: $(".isOpen").offset().top
				    }, 600)

					this.$nextTick(() => {
						this.isOpen = !this.isOpen
					})
				} else {
					this.isOpen = !this.isOpen

					this.$nextTick(() => {
						$('html, body').animate({
					        scrollTop: $(".isOpen").offset().top
					    }, 600)
					})
				}
			}
		}
	}
</script>

<style>
	.fade-enter-active, .fade-leave-active {
		transition: all .3s ease;
	}
	.fade-enter, .fade-leave-active /* .fade-leave-active in <2.1.8 */ {
		opacity: 0;
		transform: translateY(20px);
		transition: all .3s ease;
	}
</style>