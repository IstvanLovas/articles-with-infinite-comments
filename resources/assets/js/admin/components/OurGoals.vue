<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="our_goals_header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="our_goals_header"
                            name="our_goals_header"
                            type="text"
                            v-model="form.our_goals_header"
                    >
                    <span v-if="form.errors.has('our_goals_header')" class="error" v-text="form.errors.get('our_goals_header')"></span>
                </div>
                
                <div class="form-group">
                    <label for="our_goals_subheader" class="control-label">Subheader:</label>
                    <input  class="form-control"
                            id="our_goals_subheader"
                            name="our_goals_subheader"
                            type="text"
                            v-model="form.our_goals_subheader"
                    >
                    <span v-if="form.errors.has('our_goals_subheader')" class="error" v-text="form.errors.get('our_goals_subheader')"></span>
                </div>

                <div class="form-group">
                    <label for="our_goals_goal1" class="control-label">Goal 1:</label>
                    <textarea  class="form-control"
                            id="our_goals_goal1"
                            name="our_goals_goal1"
                            v-model="form.our_goals_goal1"
                    ></textarea>
                    <span v-if="form.errors.has('our_goals_goal1')" class="error" v-text="form.errors.get('our_goals_goal1')"></span>
                </div>

                <div class="form-group">
                    <label for="our_goals_goal2" class="control-label">Goal 2:</label>
                    <textarea  class="form-control"
                            id="our_goals_goal2"
                            name="our_goals_goal2"
                            v-model="form.our_goals_goal2"
                    ></textarea>
                    <span v-if="form.errors.has('our_goals_goal2')" class="error" v-text="form.errors.get('our_goals_goal2')"></span>
                </div>

                <div class="form-group">
                    <label for="our_goals_goal3" class="control-label">Goal 3:</label>
                    <textarea  class="form-control"
                            id="our_goals_goal3"
                            name="our_goals_goal3"
                            v-model="form.our_goals_goal3"
                    ></textarea>
                    <span v-if="form.errors.has('our_goals_goal3')" class="error" v-text="form.errors.get('our_goals_goal3')"></span>
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
            'ourGoalsHeader',
            'ourGoalsSubheader',
            'ourGoalsGoal1',
            'ourGoalsGoal2',
            'ourGoalsGoal3'
        ],
        data() {
            return {
                form: new Form({
                    our_goals_header:this.ourGoalsHeader,
                    our_goals_subheader:this.ourGoalsSubheader,
                    our_goals_goal1:this.ourGoalsGoal1,
                    our_goals_goal2:this.ourGoalsGoal1,
                    our_goals_goal3:this.ourGoalsGoal2
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/' + this.patchLink + '/update')
                    .then(response => this.updateInputs(response));
            },
            updateInputs(response) {
                this.form.our_goals_header = response.our_goals_header
                this.form.our_goals_subheader = response.our_goals_subheader
                this.form.our_goals_goal1 = response.our_goals_goal1
                this.form.our_goals_goal2 = response.our_goals_goal2
                this.form.our_goals_goal3 = response.our_goals_goal3
            }
        }
    }
</script>