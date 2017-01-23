<template>
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="dropzone-wrapper">
                <form id="uploadCaseStudyPhoto" class="dropzone">
                    <input type="hidden" name="_method" value="PUT">
                </form>
            </div>

        </div>
    </div>
</template>

<script>
    import Dropzone from 'dropzone'

    export default {
        props:['caseId'],
        mounted() {
            let that = this

            Dropzone.autoDiscover = false;

            new Dropzone("#uploadCaseStudyPhoto", {
                url: '/admin/case-study/' + that.caseId + '/photo',
                paramName: 'photo',
                maxFiles: 1,
                maxFilesize: 10,
                acceptedFiles: '.jpg, .jpeg, .png',
                accept(file, done) {
                    done();
                },
                init() {
                    this.on("addedfile", () => {
                        if (this.files[1] != null){
                            this.removeFile(this.files[0]);
                        }
                    });
                    this.on("success", (file,response) => {
                        Event.$emit('caseStudyPhotoUploaded', {
                            photo_path: response.photo_path
                        })
                    })
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dictDefaultMessage: 'Upload image'
            });
        }
    }
</script>