<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="our_aims_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="our_aims_header"
                            name="our_aims_header"
                            type="text"
                            v-model="form.our_aims_header"
                    >
                    <span v-if="form.errors.has('our_aims_header')" class="error" v-text="form.errors.get('our_aims_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="our_aims_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="our_aims_subheader"
                            name="our_aims_subheader"
                            type="text"
                            v-model="form.our_aims_subheader"
                    >
                    <span v-if="form.errors.has('our_aims_subheader')" class="error" v-text="form.errors.get('our_aims_subheader')"></span>
                </div>

                <div class="form-group">
                    <label for="our_aims_1_text" class="control-label">Our Aims 1 / Text:</label>
                    <textarea  class="form-control"
                            id="our_aims_1_text"
                            name="our_aims_1_text"
                            v-model="form.our_aims_1_text"
                    ></textarea>
                    <span v-if="form.errors.has('our_aims_1_text')" class="error" v-text="form.errors.get('our_aims_1_text')"></span>
                </div>

               <div class="form-group">
                    <label for="our_aims_2_text" class="control-label">Our Aims 2 / Text:</label>
                    <textarea  class="form-control"
                            id="our_aims_2_text"
                            name="our_aims_2_text"
                            v-model="form.our_aims_2_text"
                    ></textarea>
                    <span v-if="form.errors.has('our_aims_2_text')" class="error" v-text="form.errors.get('our_aims_2_text')"></span>
                </div>

                <div class="form-group">
                    <label for="our_aims_3_text" class="control-label">Our Aims 3 / Text:</label>
                    <textarea  class="form-control"
                            id="our_aims_3_text"
                            name="our_aims_3_text"
                            v-model="form.our_aims_3_text"
                    ></textarea>
                    <span v-if="form.errors.has('our_aims_3_text')" class="error" v-text="form.errors.get('our_aims_3_text')"></span>
                </div>

                <div class="form-group">
                    <label for="our_aims_4_text" class="control-label">Our Aims 4 / Text:</label>
                    <textarea  class="form-control"
                            id="our_aims_4_text"
                            name="our_aims_4_text"
                            type="text"
                            v-model="form.our_aims_4_text"
                    ></textarea>
                    <span v-if="form.errors.has('our_aims_4_text')" class="error" v-text="form.errors.get('our_aims_4_text')"></span>
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
            'ourAimsHeader',
            'ourAimsSubheader',
            'ourAims1Text',
            'ourAims1ImagePath',
            'ourAims2Text',
            'ourAims2ImagePath',
            'ourAims3Text',
            'ourAims3ImagePath',
            'ourAims4Text',
            'ourAims4ImagePath',
        ],
        data() {
            return {
                form: new Form({
                    our_aims_header:this.ourAimsHeader,
                    our_aims_subheader:this.ourAimsSubheader,
                    our_aims_1_text:this.ourAims1Text,
                    our_aims_1_image_path:this.ourAims1ImagePath,
                    our_aims_2_text:this.ourAims2Text,
                    our_aims_2_image_path:this.ourAims2TextImagePath,
                    our_aims_3_text:this.ourAims3Text,
                    our_aims_3_image_path:this.ourAims3ImagePath,
                    our_aims_4_text:this.ourAims4Text,
                    our_aims_4_image_path:this.ourAims4ImagePath,
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.our_aims_header = response.our_aims_header
                this.form.our_aims_subheader = response.our_aims_subheader
                this.form.our_aims_1_text = response.our_aims_1_text
                this.form.our_aims_1_image_path = response.our_aims_1_image_path
                this.form.our_aims_2_text = response.our_aims_2_text
                this.form.our_aims_2_image_path = response.our_aims_2_image_path
                this.form.our_aims_3_text = response.our_aims_3_text
                this.form.our_aims_3_image_path = response.our_aims_3_image_path
                this.form.our_aims_4_text = response.our_aims_4_text
                this.form.our_aims_4_image_path = response.our_aims_4_image_path
            }
        }
    }
</script>