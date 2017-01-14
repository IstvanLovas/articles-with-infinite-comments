<template>
	<div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="banner_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="banner_header"
                            name="banner_header"
                            type="text"
                            v-model="form.banner_header"
                    >
                    <span v-if="form.errors.has('banner_header')" class="error" v-text="form.errors.get('banner_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="banner_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="banner_subheader"
                            name="banner_subheader"
                            type="text"
                            v-model="form.banner_subheader"
                    >
                    <span v-if="form.errors.has('banner_subheader')" class="error" v-text="form.errors.get('banner_subheader')"></span>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary" :disabled="form.errors.any()">
                    Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
	export default {
		props:[
            'patchLink',
            'bannerHeader',
            'bannerSubheader',
            'patchLink'
        ],
		data() {
	        return {
	    		form: new Form({
	    			banner_header:this.bannerHeader,
	    			banner_subheader:this.bannerSubheader
	    		})
	        }
	    },
	    methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.banner_header = response.banner_header
                this.form.banner_subheader = response.banner_subheader
            }
        }
	}
</script>