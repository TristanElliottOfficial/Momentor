<template>
  <input
    :type="type"
    :id="id"
    :name="name"
    class="form-input"
    :class="this.invalid"
    :placeholder="placeholder"
  />
</template>

<script>
  export default {
    name: "TextInput",
    props: {
      id: String,
      type: String,
      name: String,
      placeholder: String
    },
    data() {
      return {
        invalid: 'form-input-error',
        errors: ''
      }
    },
    mounted: {
      /**
       * Check For Input Error
       * @description If the users enters information into the for and it does not
       *              match the specific input validation rules, we want to display
       *              the error class.
       * @version 1.0
       */
      if(this.errors === '') {
        this.invalid = true
      }
    }
  }
</script>

<style lang="postcss" scoped>
  .form-input {
    @apply block px-4 py-2 w-full rounded bg-gray-100 font-light border focus:outline-none;
  }
  .form-input:focus {
    @apply outline-none;
  }
  .form-input-error {
    @apply border-red-500;
  }
</style>
