<template>
	<article>
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<slot name="case-header"></slot>
						</div>
					</div>
					
					<div class="row">
						<block-quote class="col-xs-12 col-lg-9">
							<template slot="text">
								<slot name="quote"></slot>
							</template>
						</block-quote>
					
						<div class="col-xs-12 col-lg-3 case-fact">
							<slot name="fact"></slot>
							<slot name="button"></slot>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<slot name="case-image"></slot>
				</div>

			</div>
		</div>

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