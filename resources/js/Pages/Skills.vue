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
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Visual Studio Code</h3>
                <vs-code-logo class="h-16"></vs-code-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 3 / 10</p>
              </div>
              <p class="mt-2">
                For some appliances VSCode is more performant then PhpStorm e.g. Vue-CLI Apps. The indexing of PhpStorm
                on my development Laptop is really slow, which is why i switch to VSCode if I have to do some intensive
                Front-End tasks.
              </p>
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

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">C#</h3>
                <c-sharp-logo class="w-24 h-24"></c-sharp-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">
                I earned most of my experience of C# at my workplace. I wrote some smaller applications and add-ons
                in C#. Everything I know about C# I learned myself from online resources.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Javascript</h3>
                <js-logo class="w-24 h-24"></js-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">
                Because I am mostly interested in web-development I started to use Javascript fairly early into my
                development adventure. But after I acquired some skills in Vue.js I quickly abandoned plain Javascript
                and started to use Vue.js exclusively.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Go</h3>
                <c-sharp-logo class="w-24 h-24"></c-sharp-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 8 / 10</p>
              </div>
              <p class="mt-2">
                Because I am mostly interested in
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Frameworks</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Laravel</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Vue.js</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Tailwind CSS</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Inertia.js</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Databases</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MySQL</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">PostgreSQL</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Operating Systems</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Windows</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MacOS</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Ubuntu</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Other Technologies</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Docker</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Git</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Nginx</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Node.js</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2">

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
import VsCodeLogo from '@/Shared/vs-code-logo'
import CSharpLogo from '@/Shared/csharp-logo'
import JsLogo from '@/Shared/js-logo'

export default {
    name: "Skills",
    components: {
        AppLayout,
        PhpStormLogo,
        PhpLogo,
        VsCodeLogo,
        CSharpLogo,
        JsLogo,
    }
}
</script>

<style scoped>

</style>