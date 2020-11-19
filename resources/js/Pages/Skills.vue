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
              <p class="mt-2 px-32">
                I am working with PhpStorm as my primary editor. But I still do not know most of the system in-depth,
                since most of the time I do not need the functions provided.
              </p>
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
              <p class="mt-2 px-32">
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
              <p class="mt-2 px-32">
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
              <p class="mt-2 px-32">
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
              <p class="mt-2 px-32">
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
                <go-logo class="h-12"></go-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 2 / 10</p>
              </div>
              <p class="mt-2 px-32">
                I only took a look at Go for a Weekend. I never really looked at it deeper but I will keep it in my
                mind and I am certainly not apposed to learning and doing more with go.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Frameworks</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Laravel</h3>
                <laravel-logo class="h-24"></laravel-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2 px-32">
                Laravel is my preferred Framework when it comes to Backend development. Aside from the Framework itself
                the ecosystem that Laravel provides is a huge, extremely useful toolbox every web-developer should take a
                look on. I can find my way around in Laravel but I still have some areas I lack knowledge.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Vue.js</h3>
                <vue-js-logo class="w-24 h-24"></vue-js-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 5 / 10</p>
              </div>
              <p class="mt-2 px-32">
                At first I was using the blade templating engine laravel provides. But after some time I realized that
                if I want to realize some more complex logic in the front-end, doing this will be much easier with a
                framework like Vue.js. I am capable of realizing most of the concepts I want to realize. Still, I run into
                some problems quite often, because I still don't really understand how exactly Vue.js works.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Tailwind CSS</h3>
                <tailwind-css-logo class="w-24 h-24"></tailwind-css-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 8 / 10</p>
              </div>
              <p class="mt-2 px-32">
                When I first heard about Tailwind CSS from a colleague and looked into it, I felt some much relieve.
                It's not like I hate CSS, but component frameworks like Bootstrap weren't cutting it for me and plain
                CSS was just not convenient enough. I have already done a lot with Tailwind and I am fairly proficient
                with it. I still gave to look up the documentation sometimes for classes I don't use often or if I want
                to customize the framework.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Inertia.js</h3>
                <inertia-js-logo class="w-24"></inertia-js-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2 px-32">
                Inertia.js isn't really a framework, it's a tool to integrate front-end frameworks and SPAs with b
                ack-end frameworks more seamlessly. Inertia.js doesn't require a specific language or framework to work.
                I have only used it with Laravel and Vue.js. It allows me to have a SPA without having to provide a
                REST API on my back-end. You can take a look at the
                <a class="text-indigo-500 hover:underline" href="https://github.com/inertiajs/pingcrm" target="_blank">PingCRM</a>
                repository or at this repository to see how it works.
              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <h2 class="p-2 border-b text-2xl text-center border-gray-200">Databases</h2>
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MySQL</h3>
                <mysql-logo class="w-24"></mysql-logo>
              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 8 / 10</p>
              </div>
              <p class="mt-2 px-32">
                MySQL was the first database I learned to use and I have worked with it ever since. I am using MySQL
                in a professional environment and as my database of choice for private projects. I am currently
                administering MySQL servers and capable of writing complex queries.
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
              <p class="mt-2 px-32">

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
                <p>Skill: 9 / 10</p>
              </div>
              <p class="mt-2 px-32">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MacOS</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2 px-32">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Ubuntu</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 7 / 10</p>
              </div>
              <p class="mt-2 px-32">

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
              <p class="mt-2 px-32">

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
              <p class="mt-2 px-32">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Nginx</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 6 / 10</p>
              </div>
              <p class="mt-2 px-32">

              </p>
            </div>
          </div>

          <div class="w-full p-4">
            <div class="p-2">
              <div class="flex justify-between mt-2">
                <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Node.js</h3>

              </div>
              <div class="my-auto font-semibold">
                <p>Skill: 5 / 10</p>
              </div>
              <p class="mt-2 px-32">

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
import GoLogo from '@/Shared/go-logo'
import LaravelLogo from '@/Shared/laravel-logo'
import VueJsLogo from '@/Shared/vue-js-logo'
import TailwindCssLogo from '@/Shared/tailwind-css-logo'
import InertiaJsLogo from '@/Shared/inertia-js-logo'
import MysqlLogo from '@/Shared/mysql-logo'

export default {
    name: "Skills",
    components: {
        AppLayout,
        PhpStormLogo,
        PhpLogo,
        VsCodeLogo,
        CSharpLogo,
        JsLogo,
        GoLogo,
        LaravelLogo,
        VueJsLogo,
        TailwindCssLogo,
        InertiaJsLogo,
        MysqlLogo,
    }
}
</script>

<style scoped>

</style>