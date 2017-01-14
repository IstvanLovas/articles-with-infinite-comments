<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="our_current_challenge_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="our_current_challenge_header"
                            name="our_current_challenge_header"
                            type="text"
                            v-model="form.our_current_challenge_header"
                    >
                    <span v-if="form.errors.has('our_current_challenge_header')" class="error" v-text="form.errors.get('our_current_challenge_header')"></span>
                </div>

                <div class="form-group">
                    <label for="our_current_challenge_text_left" class="control-label">Text left:</label>
                    <textarea  class="form-control"
                            id="our_current_challenge_text_left"
                            name="our_current_challenge_text_left"
                            v-model="form.our_current_challenge_text_left"
                    ></textarea>
                    <span v-if="form.errors.has('our_current_challenge_text_left')" class="error" v-text="form.errors.get('our_current_challenge_text_left')"></span>
                </div>

                <div class="form-group">
                    <label for="our_current_challenge_text_right" class="control-label">Text right:</label>
                    <textarea  class="form-control"
                            id="our_current_challenge_text_right"
                            name="our_current_challenge_text_right"
                            v-model="form.our_current_challenge_text_right"
                    ></textarea>
                    <span v-if="form.errors.has('our_current_challenge_text_right')" class="error" v-text="form.errors.get('our_current_challenge_text_right')"></span>
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
            'ourCurrentChallengeHeader',
            'ourCurrentChallengeTextLeft',
            'ourCurrentChallengeTextRight'
        ],
        data() {
            return {
                form: new Form({
                    our_current_challenge_header:this.ourCurrentChallengeHeader,
                    our_current_challenge_text_left:this.ourCurrentChallengeTextLeft,
                    our_current_challenge_text_right:this.ourCurrentChallengeTextRight
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.our_current_challenge_header = response.our_current_challenge_header
                this.form.our_current_challenge_text_left = response.our_current_challenge_text_left
                this.form.our_current_challenge_text_right = response.our_current_challenge_text_right
            }
        }
    }
</script>