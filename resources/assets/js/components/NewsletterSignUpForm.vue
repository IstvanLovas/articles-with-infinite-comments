<template>
	<div class="form">
		<form  	@submit.prevent="submitForm"
				@keydown="form.errors.clear($event.target.name)"
    			class="form-horizontal"
    			role="form"
    	>
            <div class="form-group">
                <label for="name" class="control-label">Name:</label>
                <input  class="form-control"
                        id="name"
                        name="name"
                        type="text"
                        v-model="form.name"
                >
                <span v-if="form.errors.has('name')" class="error" v-text="form.errors.get('name')"></span>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Email:</label>
                <input  class="form-control"
                        id="email"
                        name="email"
                        type="text"
                        v-model="form.email"
                >
                <span v-if="form.errors.has('email')" class="error" v-text="form.errors.get('email')"></span>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" :disabled="form.errors.any()">
                Sign me up
                </button>
            </div>

		</form>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				form: new Form({
                    name:'',
                    email:''
                })
			}
		},
		methods: {
			submitForm() {
                this.form.post('/subscribers',this.form)
                    .then(response => this.onSuccess(response))
            },
            onSuccess(response) {
                window.location.href = '/thank-you'
            }
		}
	}
</script>