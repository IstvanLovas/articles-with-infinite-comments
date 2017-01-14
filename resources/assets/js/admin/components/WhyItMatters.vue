<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="why_it_matters_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="why_it_matters_header"
                            name="why_it_matters_header"
                            type="text"
                            v-model="form.why_it_matters_header"
                    >
                    <span v-if="form.errors.has('why_it_matters_header')" class="error" v-text="form.errors.get('why_it_matters_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="why_it_matters_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="why_it_matters_subheader"
                            name="why_it_matters_subheader"
                            type="text"
                            v-model="form.why_it_matters_subheader"
                    >
                    <span v-if="form.errors.has('why_it_matters_subheader')" class="error" v-text="form.errors.get('why_it_matters_subheader')"></span>
                </div>

                <div class="form-group">
                    <label for="why_it_matters_text" class="control-label">Text:</label>
                    <textarea  class="form-control"
                            id="why_it_matters_text"
                            name="why_it_matters_text"
                            v-model="form.why_it_matters_text"
                    ></textarea>
                    <span v-if="form.errors.has('why_it_matters_text')" class="error" v-text="form.errors.get('why_it_matters_text')"></span>
                </div>

                <div class="form-group">
                    <label for="why_it_matters_fact" class="control-label">Fact:</label>
                    <textarea  class="form-control"
                            id="why_it_matters_fact"
                            name="why_it_matters_fact"
                            v-model="form.why_it_matters_fact"
                    ></textarea>
                    <span v-if="form.errors.has('why_it_matters_fact')" class="error" v-text="form.errors.get('why_it_matters_fact')"></span>
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
            'whyItMattersHeader',
            'whyItMattersSubheader',
            'whyItMattersText',
            'whyItMattersFact'
        ],
        data() {
            return {
                form: new Form({
                    why_it_matters_header:this.whyItMattersHeader,
                    why_it_matters_subheader:this.whyItMattersSubheader,
                    why_it_matters_text:this.whyItMattersText,
                    why_it_matters_fact:this.whyItMattersFact
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.why_it_matters_header = response.why_it_matters_header
                this.form.why_it_matters_subheader = response.why_it_matters_subheader
                this.form.why_it_matters_text = response.why_it_matters_text
                this.form.why_it_matters_fact = response.why_it_matters_fact
            }
        }
    }
</script>