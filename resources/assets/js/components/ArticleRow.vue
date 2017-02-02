<template>
	<section-row class="article">
		<template slot="body">

			<article class="col-xs-12 col-md-8 section">
				<slot name="article-title"></slot>
				<slot name="article-lead"></slot>
				<slot name="article-body"></slot>
				<slot name="article-comments"></slot>
			</article>

			<aside class="col-xs-12 col-md-4">

			</aside>

		</template>
	</section-row>
</template>

<script>
	import SectionRow from './SectionRow.vue'

	export default {
		components: {
			SectionRow
		}
	}
</script>