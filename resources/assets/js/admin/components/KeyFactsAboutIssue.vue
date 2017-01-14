<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="key_facts_1_header" class="control-label">Key Facts 1 / Header:</label>
                    <input  class="form-control"
                            id="key_facts_1_header"
                            name="key_facts_1_header"
                            type="text"
                            v-model="form.key_facts_1_header"
                    >
                    <span v-if="form.errors.has('key_facts_1_header')" class="error" v-text="form.errors.get('key_facts_1_header')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_1_number" class="control-label">Key Facts 1 / Total:</label>
                    <input  class="form-control"
                            id="key_facts_1_number"
                            name="key_facts_1_number"
                            type="text"
                            v-model="form.key_facts_1_number"
                    >
                    <span v-if="form.errors.has('key_facts_1_number')" class="error" v-text="form.errors.get('key_facts_1_number')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_1_image" class="control-label">Key Facts 1 / Image:</label>
                    <input  class="form-control"
                            id="key_facts_1_image"
                            name="key_facts_1_image"
                            type="text"
                            v-model="form.key_facts_1_image"
                    >
                    <span v-if="form.errors.has('key_facts_1_image')" class="error" v-text="form.errors.get('key_facts_1_image')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_2_header" class="control-label">Key Facts 2 / Header:</label>
                    <input  class="form-control"
                            id="key_facts_2_header"
                            name="key_facts_2_header"
                            type="text"
                            v-model="form.key_facts_2_header"
                    >
                    <span v-if="form.errors.has('key_facts_2_header')" class="error" v-text="form.errors.get('key_facts_2_header')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_2_number" class="control-label">Key Facts 2 / Total:</label>
                    <input  class="form-control"
                            id="key_facts_2_number"
                            name="key_facts_2_number"
                            type="text"
                            v-model="form.key_facts_2_number"
                    >
                    <span v-if="form.errors.has('key_facts_2_number')" class="error" v-text="form.errors.get('key_facts_2_number')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_2_image" class="control-label">Key Facts 2 / Image:</label>
                    <input  class="form-control"
                            id="key_facts_2_image"
                            name="key_facts_2_image"
                            type="text"
                            v-model="form.key_facts_2_image"
                    >
                    <span v-if="form.errors.has('key_facts_1_image')" class="error" v-text="form.errors.get('key_facts_1_image')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_3_header" class="control-label">Key Facts 3 / Header:</label>
                    <input  class="form-control"
                            id="key_facts_3_header"
                            name="key_facts_3_header"
                            type="text"
                            v-model="form.key_facts_3_header"
                    >
                    <span v-if="form.errors.has('key_facts_3_header')" class="error" v-text="form.errors.get('key_facts_3_header')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_3_number" class="control-label">Key Facts 3 / Total:</label>
                    <input  class="form-control"
                            id="key_facts_3_number"
                            name="key_facts_3_number"
                            type="text"
                            v-model="form.key_facts_3_number"
                    >
                    <span v-if="form.errors.has('key_facts_3_number')" class="error" v-text="form.errors.get('key_facts_3_number')"></span>
                </div>

                <div class="form-group">
                    <label for="key_facts_3_image" class="control-label">Key Facts 3 / Image:</label>
                    <input  class="form-control"
                            id="key_facts_3_image"
                            name="key_facts_3_image"
                            type="text"
                            v-model="form.key_facts_3_image"
                    >
                    <span v-if="form.errors.has('key_facts_3_image')" class="error" v-text="form.errors.get('key_facts_3_image')"></span>
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
            'keyFacts1Header',
            'keyFacts1Number',
            'keyFacts1Image',
            'keyFacts2Header',
            'keyFacts2Number',
            'keyFacts2Image',
            'keyFacts3Header',
            'keyFacts3Number',
            'keyFacts3Image',
        ],
        data() {
            return {
                form: new Form({
                    key_facts_1_header:this.keyFacts1Header,
                    key_facts_1_number:this.keyFacts1Number,
                    key_facts_1_image:this.keyFacts1Image,
                    key_facts_2_header:this.keyFacts2Header,
                    key_facts_2_number:this.keyFacts2Number,
                    key_facts_2_image:this.keyFacts2Image,
                    key_facts_3_header:this.keyFacts3Header,
                    key_facts_3_number:this.keyFacts3Number,
                    key_facts_3_image:this.keyFacts3Image
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.key_facts_1_header = response.key_facts_1_header
                this.form.key_facts_1_number = response.key_facts_1_number
                this.form.key_facts_1_image = response.key_facts_1_image
                this.form.key_facts_2_header = response.key_facts_2_header
                this.form.key_facts_2_number = response.key_facts_2_number
                this.form.key_facts_2_image = response.key_facts_2_image
                this.form.key_facts_3_header = response.key_facts_3_header
                this.form.key_facts_3_number = response.key_facts_3_number
                this.form.key_facts_3_image = response.key_facts_3_image
            }
        }
    }
</script>