<template>
	<div id="masthead" :class="{open: headerIsOpen}">
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
		data() {
			return {
				headerIsOpen: false
			}
		},
		created() {
	        Event.$on('headerIsOpen', response => this.headerIsOpen = ! this.headerIsOpen )
	    },
	}
</script>