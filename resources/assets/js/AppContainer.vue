<template>
	<main class="flex-horizontal-space-between">
		<slot name="content"></slot>
		<login-panel></login-panel>
	</main>
</template>

<script>
	import LoginPanel from './components/LoginPanel.vue'

	export default {
		components:{
			LoginPanel
		}
	}
</script>