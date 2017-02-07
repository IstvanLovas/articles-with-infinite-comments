<template>
	<div id="loginPanel" class="flex-horizontal" :class="{isOpen: isOpen}">
	    <div class="overlay" @click="isOpen = false"></div>
	    <div class="panel">
	        <div class="panel-heading text-uppercase">Please login to comment</div>
            <ul class="auth-type">
                <li class="type-facebook">
                    <a  href="/auth/facebook"
                        class="btn btn-brand-yellow text-uppercase"
                        title="Log in using Facebook"
                    >F</a>
                </li>
                <li class="type-twitter">
                    <a  href="/auth/twitter"
                        class="btn btn-brand-yellow text-uppercase"
                        title="Log in using Twitter"
                    >T</a>
                </li>
                <li class="type-linkedin">
                    <a  href="/auth/linkedin"
                        class="btn btn-brand-yellow text-uppercase"
                        title="Log in using LinkedIn"
                    >in</a>
                </li>
                <li class="type-email">
                    <a href="/auth/linkedin" class="btn btn-brand-yellow text-uppercase" title="Log in using Email">Email</a>
                </li>
            </ul>

            <hr>

	        <div v-if="loginOption == 'email'" class="form-wrapper">
	        	<form   @submit.prevent="onSubmit"
                        @keydown="form.errors.clear($event.target.name)"
                        class="form"
	        	>
                    <div class="form-group">
                        <label for="email" class="control-label">Email Address:</label>
                        <input  class="form-control"
                                id="email"
                                name="email"
                                type="text"
                                v-model="form.email"
                                autofocus
                        >
                        <span v-if="form.errors.has('email')" class="error" v-text="form.errors.get('email')"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input  class="form-control"
                                id="password"
                                name="password"
                                type="password"
                                v-model="form.password"
                        >
                        <span v-if="form.errors.has('password')" class="error" v-text="form.errors.get('password')"></span>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" v-model="form.remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button     type="submit"
                                    class="btn btn-brand-pink btn-bg-pink text-uppercase"
                                    :disabled="form.errors.any()"
                        >Sign in</button>

                        <a class="btn btn-link" href="/password/reset">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
	        </div>

            <button class="btn-cancel text-uppercase" @click="closeWindow">
                <i class="fa fa-times hidden-md hidden-lg" aria-hidden="true"></i>
                <span class="hidden-xs hidden-sm">Close window</span>
            </button>
	    </div>
	</div>
</template>

<script>
	export default {
		data() {
            return {
            	isOpen:false,
                loginOption:'email',
                form: new Form({
                    email:'',
                    password:'',
                    remember:false,
                })
            }
        },
        created() {
            Event.$on('openLoginWindow', response => this.isOpen = true )
        },
        methods: {
            onSubmit() {
                this.form.post('/login',this.form)
                    .then(response => this.onSuccess())
            },
            closeWindow() {
                this.isOpen = false
            },
            onSuccess() {
                this.closeWindow()
            }
        }
	}
</script>