<template>
	<article class="casy-study">
		<div class="col-xs-12 col-md-6 col-lg-8">
			<div class="row">

				<div class="col-xs-12">
					<slot name="header"></slot>
				</div>

				<div class="col-xs-12">
					<div class="row">

						<block-quote class="col-xs-12 col-lg-9">
							<template slot="text">
								<slot name="quote"></slot>
							</template>
						</block-quote>
						
						<div class="col-xs-12 col-lg-3 fact">
							<slot name="fact"></slot>
							<slot name="button"></slot>
						</div>

					</div>
				</div>

			</div>
		</div>
		<slot name="case-image"></slot>
	</article>
</template>

<script>
	import BlockQuote from './BlockQuote.vue'

	export default {
		components: {
			BlockQuote
		}
	}
</script>