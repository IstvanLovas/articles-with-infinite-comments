<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="get_the_latest_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="get_the_latest_header"
                            name="get_the_latest_header"
                            type="text"
                            v-model="form.get_the_latest_header"
                    >
                    <span v-if="form.errors.has('get_the_latest_header')" class="error" v-text="form.errors.get('get_the_latest_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="get_the_latest_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="get_the_latest_subheader"
                            name="get_the_latest_subheader"
                            type="text"
                            v-model="form.get_the_latest_subheader"
                    >
                    <span v-if="form.errors.has('get_the_latest_subheader')" class="error" v-text="form.errors.get('get_the_latest_subheader')"></span>
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
            'getTheLatestHeader',
            'getTheLatestSubheader'
        ],
        data() {
            return {
                form: new Form({
                    get_the_latest_header:this.getTheLatestHeader,
                    get_the_latest_subheader:this.getTheLatestSubheader,
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.get_the_latest_header = response.get_the_latest_header
                this.form.get_the_latest_subheader = response.get_the_latest_subheader
            }
        }
    }
</script>