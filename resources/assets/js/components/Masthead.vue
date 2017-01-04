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
		<app-header></app-header>
	</div>
</template>

<script>
	import AppHeader from './layout/AppHeader.vue'

	export default {
		components:{
			AppHeader
		}
	}
</script>