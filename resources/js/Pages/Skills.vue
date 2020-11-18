<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Skills
      </h2>
    </template>

    <div class="py-12">
      <div class="w-full flex flex-col md:flex-row">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg max-w-xs mx-auto sm:px-6 lg:px-8">
          <php-storm-logo class="m-4 mx-auto"></php-storm-logo>
          <div class="p-2 text-center">
            <div class="font-semibold">
              <p>PhpStorm</p>
              <p>Skill: 4 / 10</p>
            </div>
            <p class="mt-2">I am working with PhpStorm as my primary editor. But I still do not know most of the system in-depth.</p>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PhpStormLogo from '@/Shared/phpstorm-logo'

export default {
    name: "Skills",
    components: {
        AppLayout,
        PhpStormLogo,
    }
}
</script>

<style scoped>

</style>