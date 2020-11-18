<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-4">
            <div class="py-2 border-b border-gray-200">
              <h2 class="text-2xl font-semibold" v-text="'Hello ' + User.name"></h2>
            </div>
            <div class="py-4">
              <p class="text-xl mb-2">Hey! You made it to my portfolio!</p>
              <p>I welcome you to my little website. Feel free to explore everything you can get to, maybe you will even find some secrets 😉</p>
            </div>
            <div class="py-4">
              <p class="text-xl mb-2">What you can look at</p>
              <div class="flex justify-around">
                <a :href="route('skills')" class="bg-indigo-100 block p-4 shadow hover:underline">
                  <svg focusable="false" data-prefix="fas" data-icon="list-ul" class="p-2 h-24 text-gray-700" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M48 48a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm448 16H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg>
                  <p class="text-semibold w-full text-center">My Skillset</p>
                </a>
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

export default {
  name: "Welcome",
    components: {
      AppLayout,
    },
    props: {
        User: Object
    }
}
</script>

<style scoped>

</style>