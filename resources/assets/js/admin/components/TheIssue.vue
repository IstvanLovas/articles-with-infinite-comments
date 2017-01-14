<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="the_issue_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="the_issue_header"
                            name="the_issue_header"
                            type="text"
                            v-model="form.the_issue_header"
                    >
                    <span v-if="form.errors.has('the_issue_header')" class="error" v-text="form.errors.get('the_issue_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="the_issue_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="the_issue_subheader"
                            name="the_issue_subheader"
                            type="text"
                            v-model="form.the_issue_subheader"
                    >
                    <span v-if="form.errors.has('the_issue_subheader')" class="error" v-text="form.errors.get('the_issue_subheader')"></span>
                </div>

                <div class="form-group">
                    <label for="the_issue_text_left" class="control-label">Text left:</label>
                    <textarea  class="form-control"
                            id="the_issue_text_left"
                            name="the_issue_text_left"
                            v-model="form.the_issue_text_left"
                    ></textarea>
                    <span v-if="form.errors.has('the_issue_text_left')" class="error" v-text="form.errors.get('the_issue_text_left')"></span>
                </div>

                <div class="form-group">
                    <label for="the_issue_text_right" class="control-label">Text right:</label>
                    <textarea  class="form-control"
                            id="the_issue_text_right"
                            name="the_issue_text_right"
                            v-model="form.the_issue_text_right"
                    ></textarea>
                    <span v-if="form.errors.has('the_issue_text_right')" class="error" v-text="form.errors.get('the_issue_text_right')"></span>
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
            'theIssueHeader',
            'theIssueSubheader',
            'theIssueTextLeft',
            'theIssueTextRight'
        ],
        data() {
            return {
                form: new Form({
                    the_issue_header:this.theIssueHeader,
                    the_issue_subheader:this.theIssueSubheader,
                    the_issue_text_left:this.theIssueTextLeft,
                    the_issue_text_right:this.theIssueTextRight
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.the_issue_header = response.the_issue_header
                this.form.the_issue_subheader = response.the_issue_subheader
                this.form.the_issue_text_left = response.the_issue_text_left
                this.form.the_issue_text_right = response.the_issue_text_right
            }
        }
    }
</script>