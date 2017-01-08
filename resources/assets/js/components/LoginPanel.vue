<template>
	<div id="loginPanel" class="flex-horizontal" :class="{isOpen: isOpen}">
	    <div class="overlay" @click="isOpen = false"></div>
	    <div class="panel panel-default">
	        <div class="panel-heading">Please login to comment</div>
	        <div class="panel-body">
	        	<form  	@submit.prevent="submitForm"
	        			class="form-horizontal"
	        			role="form"
	        	>
                    <div class="form-group">
                        <label for="email" class="control-label">Email Address:</label>
                        <input  class="form-control"
                                id="email"
                                name="email"
                                type="text"
                                v-model="inputs.email"
                                autofocus
                        >
                        <span v-if="errors.email" class="error" v-text="getError('email')"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input  class="form-control"
                                id="password"
                                name="password"
                                type="password"
                                v-model="inputs.password"
                                autofocus
                        >
                        <span v-if="errors.email" class="error" v-text="getError('email')"></span>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" v-model="inputs.remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary" :disabled="validating || any()">
                        {{ validating ? 'Logging In' : 'Login' }}
                        </button>

                        <a class="btn btn-link" href="/password/reset">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>

                <a href="/auth/facebook" title="Log in with Facebook">Facebook</a>
	        </div>
	    </div>
	</div>
</template>

<script>
	export default {
		data() {
            return {
            	isOpen:false,
                inputs: {
                    email:'',
                    password:'',
                    remember:false,
                },
                errors: {},
                validating: false
            }
        },
        created() {
            Event.$on('loginWindowIsOpen', response => this.isOpen = true )
        },
        methods: {
        	record(errors) {
                this.errors = errors
            },
            getError(field) {
                if(this.errors[field]) {
                    return this.errors[field][0];
                }

                return false
            },
            any() {
                return Object.keys(this.errors).length > 0
            },
            onSuccess() {
                this.validating = false
                this.errors = {}
                
                this.isOpen = false

                Event.$emit('loginSuccessful');
            },
            onFail(errors) {
                this.record(errors)
                this.validating = false
            },
            clear(field) {
                delete this.errors[field]
            },
            submitForm() {
                if(this.validating) return
                this.validating = true

                axios.post('/login',{
                    email:this.inputs.email,
                    password:this.inputs.password,
                    remember:this.inputs.remember
                })
                .then(response => this.onSuccess())
                .catch(error => this.onFail(error.response.data));
            },
        }
	}
</script>