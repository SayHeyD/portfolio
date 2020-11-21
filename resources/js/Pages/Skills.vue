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
          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Editors</h2>
            <button class="focus:outline-none" @click="toggleEditors">
              <svg :class="{'rotate-180': showEditors}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <div :class="{'hidden': !showEditors}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">PhpStorm</h3>
                  <php-storm-logo class="w-24 h-24"></php-storm-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 4 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  I am working with PhpStorm as my primary editor. But I still do not know most of the system in-depth,
                  since most of the time I do not need the functions provided.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Visual Studio Code</h3>
                  <vs-code-logo class="h-24 w-24"></vs-code-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 3 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  For some appliances VSCode is more performant then PhpStorm e.g. Vue-CLI Apps. The indexing of PhpStorm
                  on my development Laptop is really slow, which is why i switch to VSCode if I have to do some intensive
                  Front-End tasks.
                </p>
              </div>
            </div>
          </div>

          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Programming Languages</h2>
            <button class="focus:outline-none" @click="toggleLanguages">
              <svg :class="{'rotate-180': showLanguages}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div :class="{'hidden': !showLanguages}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">PHP</h3>
                  <php-logo class="w-24 h-16"></php-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 6 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
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
                <p class="mt-2 px-4 md:px-32">
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
                <p class="mt-2 px-4 md:px-32">
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
                <p class="mt-2 px-4 md:px-32">
                  I only took a look at Go for a Weekend. I never really looked at it deeper but I will keep it in my
                  mind and I am certainly not apposed to learning and doing more with go.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Python</h3>
                  <python-logo class="w-24"></python-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 5 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  I used Python a lot in school a while ago and sometimes I even use it at my workplace. I also tried
                  out some back-end development with python. Since I haven't used python in a while and only used it
                  sparingly when I did, I am sure I will not be as efficient if I had to use it right now, but I am
                  confident that I can pick it up again quickly.
                </p>
              </div>
            </div>
          </div>

          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Frameworks</h2>
            <button class="focus:outline-none" @click="toggleFrameworks">
              <svg :class="{'rotate-180': showFrameworks}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div :class="{'hidden': !showFrameworks}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Laravel</h3>
                  <laravel-logo class="h-24"></laravel-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 7 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
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
                <p class="mt-2 px-4 md:px-32">
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
                <p class="mt-2 px-4 md:px-32">
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
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Django</h3>
                  <django-logo class="w-24"></django-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 3 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  I tried out Django a while ago before I switched at stayed at Laravel. I did one or two projects with
                  Django before discarding it and sadly the Projects. I have nothing against Django but I would prefer
                  it to be able to work with Laravel.
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
                <p class="mt-2 px-4 md:px-32">
                  Inertia.js isn't really a framework, it's a tool to integrate front-end frameworks and SPAs with b
                  ack-end frameworks more seamlessly. Inertia.js doesn't require a specific language or framework to work.
                  I have only used it with Laravel and Vue.js. It allows me to have a SPA without having to provide a
                  REST API on my back-end. You can take a look at the
                  <a class="text-indigo-500 hover:underline" href="https://github.com/inertiajs/pingcrm" target="_blank">PingCRM</a>
                  repository or at this repository to see how it works.
                </p>
              </div>
            </div>
          </div>

          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Databases</h2>
            <button class="focus:outline-none" @click="toggleDatabases">
              <svg :class="{'rotate-180': showDatabases}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div :class="{'hidden': !showDatabases}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MySQL</h3>
                  <mysql-logo class="w-24"></mysql-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 8 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
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
                  <postgre-sql-logo class="w-24 h-24"></postgre-sql-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 6 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  When I tried out django I had some trouble with the mysql-connectors and substituted mysql with
                  PostgreSql. Since, I have used PostgreSql more and more in projects. Although I understand how
                  PostgreSql works I am not as comfortable with it as with MySql.
                </p>
              </div>
            </div>
          </div>

          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Operating Systems</h2>
            <button class="focus:outline-none" @click="toggleOperatingSystems">
              <svg :class="{'rotate-180': showOperatingSystems}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div :class="{'hidden': !showOperatingSystems}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Windows</h3>
                  <windows-logo class="w-24"></windows-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 9 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  Windows is the OS I have the most experience with, simply because I have used it since I was 9
                  years old. I have worked with Windows XP, Vista, 7, 8 and 10. I am also working with a Windows-Server
                  in my free time since I am managing and administering a game-server for multiple gaming communities.
                  Besides that I am working with a Windows-Server at my workplace and have used it extensively in school.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">MacOS</h3>
                  <mac-os-logo class="w-24 h-24"></mac-os-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 7 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  After I started web-development I became interested in mobile app development and looked into it. I
                  realized quickly, that if I want to develop iOS Apps I would need to get my hands onto MacOS. After
                  a push from a friend I have bought myself a second-hand MacBook Pro and have been using it as my
                  primary development machine since. Although I haven't done any mobile app development with it.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Ubuntu</h3>
                  <ubuntu-logo class="w-24 h-24"></ubuntu-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 7 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  Ubuntu is my preferred server OS when it comes to servers for web-technologies. I have little
                  experience with Ubuntu at my workplace but I am administering a Ubuntu Server in a professional
                  environment for a private customer. I also had a lot of experience with it in school. I have also
                  evaluated it as my development OS but after buying myself a Mac i switched to MacOS for that.
                </p>
              </div>
            </div>
          </div>

          <div class="p-2 mx-4 border-b text-center bg-white border-gray-200 flex">
            <h2 class="text-2xl flex-1">Other Technologies</h2>
            <button class="focus:outline-none" @click="toggleOtherTech">
              <svg :class="{'rotate-180': showOtherTech}" class="fill-current text-indigo-500 h-8 w-8 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div :class="{'hidden': !showOtherTech}">
            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Docker</h3>
                  <docker-logo class="w-24"></docker-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 6 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  I have worked with Docker out of curiosity and I had a 40 hour module for my system-technician diploma
                  which I will complete early in february 2021. I think docker offers big possibilities but when container,
                  container orchestration and the technical concepts are not used together, I think there is more time
                  involved then the technology spares us.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Git</h3>
                  <git-logo class="w-24"></git-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 7 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  Shortly after my start in software-development a friend introduced me to the concept of VCS and
                  specifically Git. I started to use GitHub and GitLab simultaneously with Git and have never done a
                  project without it since. I haven't encountered many problems when using git and never really had to
                  dive deep into it, which is why I am confident in using it a production environment but still think I
                  have a lot to learn.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Nginx</h3>
                  <nginx-logo class="w-24"></nginx-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 6 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  Nginx is my webserver of choice and I use it to serve most the websites and web-apps I administering.
                  I can setup a a nginx server as a webserver or reverse-proxy in a productive environment but i still
                  will have to research the specifics of the service I want to publish and look at the documentation
                  od the condifuration options.
                </p>
              </div>
            </div>

            <div class="w-full p-4">
              <div class="p-2">
                <div class="flex justify-between mt-2">
                  <h3 class="text-center self-center font-semibold text-xl border-b border-gray-200">Node.js</h3>
                  <node-js-logo class="w-24"></node-js-logo>
                </div>
                <div class="my-auto font-semibold">
                  <p>Skill: 5 / 10</p>
                </div>
                <p class="mt-2 px-4 md:px-32">
                  I have taken a look at node.js and I think it is an extremely powerful tool. I have checked out Node.js
                  as a back-end but discarded it because i already was tuned onto Laravel. Still I will keep an eye on
                  Node.js and I would not be mad if I would have to work with Node.js.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import PhpStormLogo from '@/Shared/Logos/phpstorm-logo'
import PhpLogo from '@/Shared/Logos/php-logo'
import VsCodeLogo from '@/Shared/Logos/vs-code-logo'
import CSharpLogo from '@/Shared/Logos/csharp-logo'
import JsLogo from '@/Shared/Logos/js-logo'
import GoLogo from '@/Shared/Logos/go-logo'
import LaravelLogo from '@/Shared/Logos/laravel-logo'
import VueJsLogo from '@/Shared/Logos/vue-js-logo'
import TailwindCssLogo from '@/Shared/Logos/tailwind-css-logo'
import InertiaJsLogo from '@/Shared/Logos/inertia-js-logo'
import MysqlLogo from '@/Shared/Logos/mysql-logo'
import PostgreSqlLogo from '@/Shared/Logos/postgresql-logo'
import PythonLogo from '@/Shared/Logos/python-logo'
import DjangoLogo from '@/Shared/Logos/django-logo'
import WindowsLogo from '@/Shared/Logos/windows-logo'
import MacOsLogo from '@/Shared/Logos/macos-logo'
import UbuntuLogo from '@/Shared/Logos/ubuntu-logo'
import DockerLogo from "@/Shared/Logos/docker-logo"
import GitLogo from '@/Shared/Logos/git-logo'
import NginxLogo from '@/Shared/Logos/nginx-logo'
import NodeJsLogo from '@/Shared/Logos/node-js-logo'

export default {
    name: "Skills",
    components: {
        DockerLogo,
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
        PostgreSqlLogo,
        PythonLogo,
        DjangoLogo,
        WindowsLogo,
        MacOsLogo,
        UbuntuLogo,
        GitLogo,
        NginxLogo,
        NodeJsLogo,
    },
    data() {
        return {
            showEditors: false,
            showLanguages: false,
            showFrameworks: false,
            showDatabases: false,
            showOperatingSystems: false,
            showOtherTech: false,
        }
    },
    methods: {
        toggleEditors() {
            this.showEditors = !this.showEditors
        },
        toggleLanguages() {
            this.showLanguages = !this.showLanguages
        },
        toggleFrameworks() {
            this.showFrameworks = !this.showFrameworks
        },
        toggleDatabases() {
            this.showDatabases = !this.showDatabases
        },
        toggleOperatingSystems() {
            this.showOperatingSystems = !this.showOperatingSystems
        },
        toggleOtherTech() {
            this.showOtherTech = !this.showOtherTech
        }
    }
}
</script>

<style scoped>

</style>