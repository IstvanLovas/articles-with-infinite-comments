<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="fact" class="control-label">Fact:</label>
                    <textarea  class="form-control"
                            id="fact"
                            name="fact"
                            v-model="form.fact"
                    ></textarea>
                    <span v-if="form.errors.has('fact')" class="error" v-text="form.errors.get('fact')"></span>
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
        props:['patchLink','fact'],
        data() {
            return {
                form: new Form({
                    fact:this.fact
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.fact = response.fact
            }
        }
    }
</script>