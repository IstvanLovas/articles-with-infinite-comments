<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Create a new Article</div>
            <div class="panel-body">
                <form   @submit.prevent="onSubmit"
                        @keydown="form.errors.clear($event.target.name)"
                >
                    <div class="form-group">
                        <label for="title" class="control-label">Title:</label>
                        <input  class="form-control"
                                id="title"
                                name="title"
                                type="text"
                                v-model="form.title"
                                autofocus
                        >
                        <span v-if="form.errors.has('title')" class="error" v-text="form.errors.get('title')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="lead" class="control-label">Lead:</label>
                        <textarea   id="lead"
                                    name="lead"
                                    class="form-control"
                                    v-model="form.lead"
                        ></textarea>
                        <span v-if="form.errors.has('lead')" class="error" v-text="form.errors.get('lead')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="body" class="control-label">Body:</label>
                        <textarea   id="body"
                                    name="body"
                                    cols="30"
                                    rows="10"
                                    class="form-control"
                                    v-model="form.body"
                        ></textarea>
                        <span v-if="form.errors.has('body')" class="error" v-text="form.errors.has('body')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="published_at" class="control-label">Published on:</label>
                        <input  id="published_at"
                                name="published_at"
                                class="form-control"
                                type="date"
                                v-model="form.published_at"
                                v-focus="focused"
                                @focus="toggleFocus"
                                @blur="toggleFocus"
                        >
                        <span v-if="form.errors.has('published_at')" class="error" v-text="form.errors.get('published_at')"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="tagList" class="control-label">Tags:</label>
                        <multiselect    v-model="form.tagList"
                                        :taggable="true"
                                        tag-placeholder="Add this as new tag"
                                        :options="tags"
                                        :multiple="true"
                                        placeholder="Search or add a tag"
                                        label="name"
                                        track-by="name"
                                        @tag="addTag"
                        ></multiselect>
                        <span v-if="form.errors.has('tagList')" class="error" v-text="form.errors.get('tagList')"></span>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary" :disabled="form.errors.any()">
                        Create Article
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
                form: new Form({
                    title:'',
                    lead:'',
                    body:'',
                    published_at:'',
                    tagList: []
                })
            }
        },
        methods: {
            toggleFocus() {
                this.focused = !this.focused

                if(this.form.errors.has('published_at')) {
                    if(this.form.published_at != '') {
                        this.form.errors.clear('published_at')
                    }
                }
            },
            onSuccess(id) {
                location.href = '/articles/' + id;
            },
            onSubmit() {
                this.form.post('/articles',this.form)
                    .then(response => this.onSuccess(response))
                    .catch(error => console.log(error.response.data));
            },
            addTag(newTag) {
                const tag = { name: newTag }

                this.form.tagList.push(tag)
                this.tags.push(tag)
            }
        }
    }
</script>
