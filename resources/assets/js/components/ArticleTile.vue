<template>
	<article class="article-tile">
		<div class="wrapper">
			<h3 class="title">
				<slot name="article-title"></slot>
			</h3>
			<slot name="article-lead"></slot>
			<div class="cta-button text-uppercase">
				<slot name="article-link"></slot>
			</div>
		</div>
	</article>
</template>

<script>
	export default {
	}
</script>