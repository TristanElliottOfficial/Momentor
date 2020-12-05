<template>
  <div class="form-group">
    <slot />
  </div>
</template>

<script>
  export default {
    name: "FormGroup"
  }
</script>

<style lang="postcss" scoped>
  .form-group {
    @apply py-2;
  }
</style>
