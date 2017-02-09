<template>
	<div>
        <ul class="list-of-emojis">
            <li>
                <button @click="pickEmoji('happy')">
                    <img src="/img/emojis/happy.svg" width="25" height="25" alt="Emoji grin" title="Emoji grin">
                </button>
            </li>
            <li>
                <button @click="pickEmoji('frown')">
                    <img src="/img/emojis/frown.svg" width="25" height="25" alt="Emoji frown" title="Emoji frown">
                </button>
            </li>
            <li>
                <button @click="pickEmoji('neutral')">
                    <img src="/img/emojis/neutral.svg" width="25" height="25" alt="Emoji neutral" title="Emoji neutral">
                </button>
            </li>
        </ul>
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
				<button 
                    type="submit"
					class="btn brand-pink-bg brand-yellow text-uppercase"
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
            pickEmoji(emoji) {
                this.form.emoji = emoji
            },
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
                swal({
                    title: 'Congratulations!',
                    text: message,
                    type: 'success',
                    timer: 3000
                }).then(
                    function () {
                        window.location.reload()
                    },
                    function (dismiss) {
                        if (dismiss === 'timer') {
                            window.location.reload()
                        }
                    }
                )
            }
        }
	}
</script>