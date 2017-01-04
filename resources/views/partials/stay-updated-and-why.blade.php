<section-row class="stay-updated-and-why">
	<template slot="header">
		<div class="col-xs-12 col-md-6 section">
			<h2>Stay Updated</h2>
			<h4>with our campaign <br>e-newsletter</h4>

			<div class="form">
				@include('partials.sign-up-form')
			</div>

			<div class="join-the-conversation hidden-xs hidden-sm">
				@include('partials.join-the-conversation')
			</div>
		</div>
	</template>

	<template slot="body">
		<div class="col-xs-12 col-md-6 section">
			<h2>Why?</h2>
			<h4>You get...</h4>

			<p>A fortnightly e–newsletter that keeps you up to date with our progress, correspondance and the latest in our  ght to combat the CQC guidance.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

			<div class="join-the-conversation hidden-md hidden-lg">
				@include('partials.join-the-conversation')
			</div>
		</div>
	</template>
</section-row>