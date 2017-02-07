<template>
	<div>
		<form 	@submit.prevent="onSubmit"
                @keydown="form.errors.clear($event.target.name)"
                class="form"
        >
			<div class="form-group">
				<textarea
					name="text"
					id="text"
					class="form-control"
					placeholder="WRITE YOUR RESPONSE..."
					v-model="form.text"
				></textarea>
				<span v-if="form.errors.has('text')" class="error" v-text="form.errors.get('text')"></span>
			</div>
		
			<div class="form-group">
				<button 	type="submit"
							class="btn btn-primary text-uppercase"
							:disabled="form.errors.any()"
				>Submit comment</button>
			</div>
		</form>
	</div>
</template>

<script>
	export default {
		props:[
			'articleId',
			'parentId'
		],
		data() {
            return {
            	authenticated:false,
                form: new Form({
                    text:'',
                    parent_id:this.parentId,
                    emoji:'happy'
                })
            }
        },
        mounted() {
        	this.checkIfAuthenticated()
        },
        methods: {
        	checkIfAuthenticated() {
        		axios
        			.get('/api/isAuth')
        			.then(response => this.authenticated = response.data.authenticated ) 
        	},
        	onSubmit() {
        		if (! this.authenticated) {
        			
        			Event.$emit('openLoginWindow');

        			return
        		}

                this.form.post('/articles/' + this.articleId + '/comments',this.form)
                    .then(response => this.onSuccess(response.message))
            },
            onSuccess(message) {
                swal(
                    'Congratulations!',
                    message,
                    'success'
                )
            }
        }
	}
</script>