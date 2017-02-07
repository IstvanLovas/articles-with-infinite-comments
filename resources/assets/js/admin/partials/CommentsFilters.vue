<template>
	<ul class="comments-filters">
		<li>
			<button class="btn btn-brand-yellow brand-white-bg text-uppercase"
                    @click="currentState = 'all'"
            >All
            </button>
		</li>
		<li>
			<button class="btn btn-brand-yellow brand-white-bg text-uppercase">Unread</button>
		</li>
		<li>
			<button class="btn btn-brand-yellow brand-white-bg text-uppercase">Read</button>
		</li>
	</ul>
</template>

<script>
	export default {
		data() {
			return {
				currentState:'all'
			}
		}
	}
</script>