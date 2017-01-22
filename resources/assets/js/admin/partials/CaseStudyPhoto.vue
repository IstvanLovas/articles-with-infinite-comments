<template>
	<div class="panel panel-default case-image">
        <div class="panel-body">
			<img 	
				:src="'/' + path"
				class="img-responsive"
				alt="Photo relevant to the case study"
			>
		</div>
	</div>
</template>

<script>
	export default {
		props:['photoPath'],
		data() {
			return {
				path: this.photoPath
			}
		},
		created() {
			Event.$on('caseStudyPhotoUploaded', response => {
                this.path = response.photo_path
            })
		}
	}
</script>