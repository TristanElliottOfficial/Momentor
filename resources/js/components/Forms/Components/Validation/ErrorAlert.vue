<template>
  <div class="form-alert">
    <p class="form-alert-text">
      <span class="form-alert-icon">
        <i class="fas fa-exclamation-circle"></i>
      </span>
      {{ message }}
    </p>
  </div>
</template>
<script>
  export default {
    name: "ErrorAlert",
    props: {
      message: String
    }
  }
</script>

<style lang="postcss" scoped>
  .form-alert {
    @apply py-2 px-3 mt-3 bg-red-200 rounded-r border-l-4 border-red-700;
  }
  .form-alert-text {
    @apply text-red-700 font-light text-sm;
  }
  .form-alert-icon {
    @apply pr-2 text-red-800;
  }
</style>
