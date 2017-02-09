<template>
	<section-row class="article">
		<template slot="body">

			<article class="col-xs-12 col-md-8 section">
				<header>
					<slot name="article-title"></slot>
				</header>
				<slot name="article-lead"></slot>
				<slot name="article-body"></slot>
				<slot name="article-comments"></slot>
			</article>

			<aside class="col-xs-12 col-md-4">
				<div class="share-links">
					<h3 class="text-uppercase">Share this article:</h3>
					<ul class="list-inline">
						<li class="facebook">F</li>
						<li class="twitter">T</li>
						<li class="linkedin">in</li>
					</ul>
				</div>

				<div class="list-of-recommended-articles">
					<h3 class="text-uppercase">You may also enjoy reading:</h3>
					<ul>
						<!-- <article-tile>
							<a slot="article-title" href="/articles/{{ $article->id }}" title="Link to read more about article">{{ $article->title }}</a>
							<div slot="article-lead" class="body-text">{{ $article->lead }}</div>
							<a slot="article-link" href="/articles/{{ $article->id }}" class="btn btn-brand-yellow brand-white-bg text-uppercase" title="Link to read more about article">Read Article</a>
						</article-tile> -->
					</ul>
				</div>
			</aside>

		</template>
	</section-row>
</template>

<script>
	import SectionRow from './SectionRow.vue'
	import ArticleTile from './ArticleTile.vue';

	export default {
		props:[
			'similarArticles'
		],
		components: {
			SectionRow,
			ArticleTile
		}
	}
</script>