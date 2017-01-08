<template>
	<div id="masthead">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 section">
					<slot name="header"></slot>
					<slot name="text"></slot>
					<slot name="button"></slot>
				</div>
		
			</div>
		</div>
		<slot name="main-header"></slot>
	</div>
</template>

<script>
	export default {
	}
</script>