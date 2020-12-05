<template>
  <label :for="id" role="label" class="form-label">
    <span class="form-label-icon"><i class="fal fa-envelope"></i></span>
    <span class="form-label-text">{{ label }}</span>
  </label>
</template>

<script>
  export default {
    name: "FormLabel",
    props: {
      id: String,
      label: String
    }
  }
</script>

<style lang="postcss" scoped>
  .form-label {
    @apply block py-2 text-sm font-light text-gray-700;
  }
  .form-label-icon {
    @apply text-gray-600;
  }
  .form-label-text {
    @apply px-2;
  }
</style>
