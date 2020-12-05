<template>
  <!-- Sidebar Vue Component -->
  <div class="px-4 py-3">
    <a href="#" class="block px-2 py-3 font-light text-gray-100 hover:text-gray-200">
      <span class="flex items-center pb-1">
        <span class="pr-2 text-4xl"><i class="fas fa-user-astronaut"></i></span>
        <span class="block text-4xl">Momentor</span>
      </span>
      <span class="p-0 m-0">
        <span class="block text-xs">Blocks For Web Development</span>
      </span>
    </a>
  </div>
</template>

<script>
  export default {
    name: "SidebarBrand",
    props: ['link', 'title']
  }
</script>
