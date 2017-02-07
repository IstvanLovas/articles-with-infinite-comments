<template>
	<div class="status">
        <form @submit.prevent="onSubmit" class="form">
            <input type="hidden" name="approved" id="approved" v-model="form.approved">

            <button type="submit"
            		class="btn brand-white-bg text-uppercase"
            		:class="classObject">
	        {{ commentApproved ? 'Reject' : 'Approve' }}
	        </button>
        </form>
    </div>
</template>

<script>
	export default {
		props:[
			'commentApproved',
			'commentId'
		],
		data() {
            return {
                form: new Form({
                    approved: !this.commentApproved
                })
            }
        },
        computed: {
			classObject() {
				return {
					'btn-brand-pink': this.commentApproved,
					'btn-brand-yellow': !this.commentApproved
				}
			}
        },
        methods: {
        	onSubmit() {
                this.form.patch('/admin/comments/' + this.commentId ,this.form)
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