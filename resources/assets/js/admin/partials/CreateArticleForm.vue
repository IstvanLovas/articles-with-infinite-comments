<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
                    class="form"
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
                    <span v-if="form.errors.has('body')" class="error" v-text="form.errors.get('body')"></span>
                </div>
                
                <div class="form-group">
                    <label for="published_at" class="control-label">Published on:</label>
                    <article-datepicker 
                        :date="date" 
                        :option="option"
                        :limit="limit"
                        name="published_at"
                        class="form-control"
                        @focus="toggleFocus"
                        @blur="toggleFocus"
                        v-focus="focused"
                    ></article-datepicker>
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
                    Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import ArticleDatepicker from 'vue-datepicker'
    import Multiselect from 'vue-multiselect'
    import focus from 'vue-focus'
    import moment from 'moment'

    export default {
        directives: { focus: focus },
        props:['tags'],
        components: {
            ArticleDatepicker,
            Multiselect
        },
        data() {
            return {
                focused: false,
                date:{
                     time: moment().format('DD-MM-YYYY')
                },
                endtime: {
                    time: ''
                },
                option: {
                    type: 'day',
                    week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
                    month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    format: 'DD-MM-YYYY',
                    placeholder: moment().format('DD-MM-YYYY'),
                    inputStyle: {
                        'display': 'block',
                        'position': 'relative',
                        'top': '-3px',
                        'width': '100%',
                        'font-size': '16px',
                        'border': '0',
                        'color': '#5F5F5F'
                    },
                    color: {
                        header: '#EFEFEF',
                        headerText: '#E74675'
                    },
                    buttons: {
                        ok: 'Ok',
                        cancel: 'Cancel'
                    },
                    overlayOpacity: 0.5, // 0.5 as default
                    dismissible: true // as true as default
                },
                form: new Form({
                    title:'',
                    lead:'',
                    body:'',
                    published_at: moment().format('DD-MM-YYYY'),
                    tagList: []
                })
            }
        },
        watch: {
            'date.time': function() {
                this.form.published_at = this.date.time
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
            onSubmit() {
                this.form.post('/admin/articles',this.form)
                    .then(response => this.onSuccess(response));
            },
            onSuccess(response) {
                swal({
                    title: 'Congratulations!',
                    text: response.success.message,
                    type: 'success',
                    timer: 3000
                }).then(
                    function () {
                        window.location.href = '/admin/articles/';
                    },
                    // handling the promise rejection
                    function (dismiss) {
                        if (dismiss === 'timer') {
                            window.location.href = '/admin/articles/';
                        }
                    }
                )
            },
            addTag(newTag) {
                const tag = { name: newTag }

                this.form.tagList.push(tag)
                this.tags.push(tag)
            }
        }
    }
</script>
