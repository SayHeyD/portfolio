<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Projects
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
          <div class="p-2 my-4 md:w-1/4 bg-white md:shadow md:rounded mx-auto">
            <div class="p-2 text-center border-b border-gray-200 flex">
              <h2 class="text-xl flex-1">CodeGaudi</h2>
            </div>

            <p class="py-6">
              CodeGaudi is a project I am working on with some friends. I am afraid I cannot tell you more.
              If you want to find out more, you will have to look
              <a class="text-indigo-500 hover:underline" target="_blank" href="https://codegaudi.com/">elsewhere</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Projects",
    components: {
        AppLayout
    }
}
</script>

<style scoped>

</style>