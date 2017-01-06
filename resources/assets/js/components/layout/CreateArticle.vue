<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Create a new Article</div>
            <div class="panel-body">
                <form  @submit.prevent="submitForm">
                    <div class="form-group">
                        <label for="title" class="control-label">Title:</label>
                        <input  class="form-control"
                                id="title"
                                name="title"
                                type="text"
                                v-model="inputs.title"
                                @keydown="clear($event.target.name)"
                                autofocus
                        >
                        <span v-if="errors.title" class="error" v-text="getError('title')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="lead" class="control-label">Lead:</label>
                        <textarea   id="lead"
                                    name="lead"
                                    class="form-control"
                                    v-model="inputs.lead"
                                    @keydown="clear($event.target.name)"
                        ></textarea>
                        <span v-if="errors.lead" class="error" v-text="getError('lead')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="body" class="control-label">Body:</label>
                        <textarea   id="body"
                                    name="body"
                                    class="form-control"
                                    v-model="inputs.body"
                                    @keydown="clear($event.target.name)"
                        ></textarea>
                        <span v-if="errors.body" class="error" v-text="getError('body')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="published_at" class="control-label">Published on:</label>
                        <input  id="published_at"
                                name="published_at"
                                class="form-control"
                                type="date"
                                v-model="inputs.published_at"
                                v-focus="focused"
                                @focus="toggleFocus"
                                @blur="toggleFocus"
                        >
                        <span v-if="errors.published_at" class="error" v-text="getError('published_at')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="tagList" class="control-label">Tags:</label>
                        <multiselect    v-model="inputs.tagList"
                                        :taggable="true"
                                        tag-placeholder="Add this as new tag"
                                        :options="tags"
                                        :multiple="true"
                                        placeholder="Search or add a tag"
                                        label="name"
                                        @keydown="clear($event.target.name)"
                                        track-by="name"
                                        @tag="addTag"
                        ></multiselect>
                        <span v-if="errors.tagList" class="error" v-text="getError('tagList')"></span>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary" :disabled="validating || any()">
                        {{ validating ? 'Creating Article' : 'Create Article' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'
    import focus from 'vue-focus'

    export default {
        directives: { focus: focus },
        props:['tags'],
        components: { Multiselect },
        data() {
            return {
                focused: false,
                inputs: {
                    title:'',
                    lead:'',
                    body:'',
                    published_at:'',
                    tagList: []
                },
                errors: {},
                validating: false
            }
        },
        mounted() {
            this.$nextTick(() => {
                //this.$http.get('/api/fetchTags').then(response => this.tags = response.data)
            })
        },
        methods: {
            toggleFocus() {
                this.focused = !this.focused

                if(this.getError('published_at')) {
                    if(this.inputs.published_at != '') {
                        this.clear('published_at')
                    }
                }
            },
            record(errors) {
                this.errors = errors
            },
            getError(field) {
                if(this.errors[field]) {
                    return this.errors[field][0];
                }

                return false
            },
            any() {
                return Object.keys(this.errors).length > 0
            },
            onSuccess(id) {
                this.validating = false
                this.errors = {}
                
                location.href = '/articles/' + id;
            },
            onFail(errors) {
                this.record(errors)
                this.validating = false
            },
            clear(field) {
                delete this.errors[field]
            },
            submitForm() {
                if(this.validating) return
                this.validating = true

                axios.post('/articles',{
                    title:this.inputs.title,
                    lead:this.inputs.lead,
                    body:this.inputs.body,
                    published_at:this.inputs.published_at,
                    tagList: this.inputs.tagList
                })
                .then(response => this.onSuccess(response.data))
                .catch(error => this.onFail(error.response.data));
            },
            addTag(newTag) {
                const tag = { name: newTag }

                this.inputs.tagList.push(tag)
                this.tags.push(tag)
            }
        }
    }
</script>
