<template>
  <input type="password" :id="id" :name="name" :value="value" :class="this.errorClass" :placeholder="placeholder" class="form-input" />
</template>
<script>
  export default {
    name: "PasswordInput",
    props: {
      id: String,
      type: String,
      name: String,
      value: String,
      placeholder: String
    },
    data() {
      return {
        input: {
          errors: null
        },
        errorClass: 'form-input-error'
      }
    },
    methods: {
      update: function() {
        if(this.input.errors === null) {
            this.input.errors = this.errorClass;
        } else {
          console.log('The update function has been triggered.')
        }
      }
    },
    mounted() {
      if(this.input.errors === 1) {
        this.input.errors = this.errorClass;
      }
    },
    watch: {
      this.update();
    }
  }
</script>

<style lang="postcss" scoped>
.form-input-error {
  @apply border-red-500;
}
</style>
