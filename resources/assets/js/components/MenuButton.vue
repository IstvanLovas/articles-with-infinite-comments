<template>
	<div class="menu" @click="toggleOpenHeader">
        <div    
            class="toggle navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#app-navbar-collapse"
        >
            <span></span>
            <span></span>
            <span></span>
        </div>
        <button 
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#app-navbar-collapse"
        >
        {{ headerIsOpen ? 'Close' : 'Menu' }}
        </button>
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
		methods: {
			toggleOpenHeader() {
	            Event.$emit('headerIsOpen');
	        },
		}
	}
</script>