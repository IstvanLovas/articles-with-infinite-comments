<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <form   @submit.prevent="onSubmit"
                    @keydown="form.errors.clear($event.target.name)"
                    class="form"
            >
                <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input  class="form-control"
                            id="name"
                            name="name"
                            type="text"
                            v-model="form.name"
                    >
                    <span v-if="form.errors.has('name')" class="error" v-text="form.errors.get('name')"></span>
                </div>
                
                <div class="form-group">
                    <label for="header" class="control-label">Header:</label>
                    <input  class="form-control"
                            id="header"
                            name="header"
                            type="text"
                            v-model="form.header"
                    >
                    <span v-if="form.errors.has('header')" class="error" v-text="form.errors.get('header')"></span>
                </div>

                <div class="form-group">
                    <label for="intro" class="control-label">Quote:</label>
                    <textarea  
                        class="form-control"
                        id="intro"
                        name="intro"
                        v-model="form.intro"
                        cols="100"
                        rows="4"
                    ></textarea>
                    <span v-if="form.errors.has('intro')" class="error" v-text="form.errors.get('intro')"></span>
                </div>

                <div class="form-group">
                    <label for="fact" class="control-label">Fact:</label>
                    <textarea  
                        class="form-control"
                        id="fact"
                        name="fact"
                        cols="100"
                        rows="2"
                        v-model="form.fact"
                    ></textarea>
                    <span v-if="form.errors.has('fact')" class="error" v-text="form.errors.get('fact')"></span>
                </div>

                <div class="form-group">
                    <label for="text_left" class="control-label">Text left:</label>
                    <textarea  
                        class="form-control"
                        id="text_left"
                        name="text_left"
                        cols="100"
                        rows="20"
                        v-model="form.text_left"
                    ></textarea>
                    <span v-if="form.errors.has('text_left')" class="error" v-text="form.errors.get('text_left')"></span>
                </div>

                <div class="form-group">
                    <label for="text_right" class="control-label">Text right:</label>
                    <textarea
                        class="form-control"
                        id="text_right"
                        name="text_right"
                        cols="100"
                        rows="20"
                        v-model="form.text_right"
                    ></textarea>
                    <span v-if="form.errors.has('text_right')" class="error" v-text="form.errors.get('text_right')"></span>
                </div>

                <div class="form-group">
                    <span class="toggle-switch-label">Active:</span>
                    <input  type="checkbox"
                            id="active"
                            name="active"
                            v-model="form.active"
                            class="cbx form-control"
                    >
                    <label for="active" class="lbl" @click="changeActiveState"></label>
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
        props:['caseStudy'],
        data() {
            return {
                form: new Form({
                    name:this.caseStudy.name,
                    header:this.caseStudy.header,
                    intro:this.caseStudy.intro,
                    fact:this.caseStudy.fact,
                    text_left:this.caseStudy.text_left,
                    text_right:this.caseStudy.text_right,
                    active:this.caseStudy.active
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.patch('/admin/case-study/' + this.caseStudy.id)
                    .then(response => this.onSuccess(response.success.message));
            },
            onSuccess(message) {
                swal({
                    title: 'Congratulations!',
                    text: message,
                    type: 'success',
                    timer: 3000
                }).then(
                    function () {
                        window.location.href = '/admin/case-study';
                    },
                    // handling the promise rejection
                    function (dismiss) {
                        if (dismiss === 'timer') {
                            window.location.href = '/admin/case-study';
                        }
                    }
                )
            },
            changeActiveState() {
                this.form.active = !this.form.active
            }
        }
    }
</script>

<style>
.toggle-switch-label {
    display:inline-block;
    margin-bottom: 5px;
}
.lbl {
  position: relative;
  display: block;
  height: 20px;
  width: 44px;
  background: #f47070;
  border-radius: 100px;
  cursor: pointer;
  z-index:100;
  transition: all 0.3s ease;
}
.lbl:after {
  position: absolute;
  left: -2px;
  top: -3px;
  display: block;
  width: 26px;
  height: 26px;
  border-radius: 100px;
  background: #ef4040;
  box-shadow: 0 3px 3px rgba(0,0,0,0.05);
  content: '';
  transition: all 0.27s ease;
}
.lbl:active:after {
  transform: scale(1.15, 0.85);
}
.cbx {
    margin:0 !important;
    width: 53px;
    position: absolute;
    opacity: 0;
    z-index: 200;
    cursor:pointer;
}
.cbx:checked ~ label {
  background: #6fbeb5;
}
.cbx:checked ~ label:after {
  left: 20px;
  background: #179588;
}
.cbx:disabled ~ label {
  /*background: #d5d5d5;*/
  pointer-events: none;
  opacity:0.5;
}
.cbx:disabled ~ label:after {
  /*background: #bcbdbc;*/
  opacity:0.5;
}
</style>