<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Skills
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Editors</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">PhpStorm</h3>
                <php-storm-logo></php-storm-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 4 / 10</p>
              </div>
              <p class="mt-2">I am working with PhpStorm as my primary editor. But I still do not know most of the system in-depth.</p>
            </div>
          </div>



          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Programming Languages</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">PHP</h3>
                <php-logo class="w-24 h-16"></php-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">
                Since most of my private projects are using Laravel, I am mostly developing with PHP. I am confident
                that I am able to do realize most concepts with PHP. I will have to admit, that because I am doing a
                lot with Laravel, my plain PHP skills have suffered a little, but I am confident i can pick it up
                again quickly.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PhpStormLogo from '@/Shared/phpstorm-logo'
import PhpLogo from '@/Shared/php-logo'

export default {
    name: "Skills",
    components: {
        AppLayout,
        PhpStormLogo,
        PhpLogo
    }
}
</script>

<style scoped>

</style>