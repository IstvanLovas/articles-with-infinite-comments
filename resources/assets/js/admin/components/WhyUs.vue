<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="why_us_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="why_us_header"
                            name="why_us_header"
                            type="text"
                            v-model="form.why_us_header"
                    >
                    <span v-if="form.errors.has('why_us_header')" class="error" v-text="form.errors.get('why_us_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="why_us_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="why_us_subheader"
                            name="why_us_subheader"
                            type="text"
                            v-model="form.why_us_subheader"
                    >
                    <span v-if="form.errors.has('why_us_subheader')" class="error" v-text="form.errors.get('why_us_subheader')"></span>
                </div>

                <div class="form-group">
                    <label for="why_us_text" class="control-label">Text:</label>
                    <textarea  class="form-control"
                            id="why_us_text"
                            name="why_us_text"
                            v-model="form.why_us_text"
                    ></textarea>
                    <span v-if="form.errors.has('why_us_text')" class="error" v-text="form.errors.get('why_us_text')"></span>
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
            'whyUsHeader',
            'whyUsSubheader',
            'whyUsText'
        ],
        data() {
            return {
                form: new Form({
                    why_us_header:this.whyUsHeader,
                    why_us_subheader:this.whyUsSubheader,
                    why_us_text:this.whyUsText
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.why_us_header = response.why_us_header
                this.form.why_us_subheader = response.why_us_subheader
                this.form.why_us_text = response.why_us_text
            }
        }
    }
</script>