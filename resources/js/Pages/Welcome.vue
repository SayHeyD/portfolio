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
        User: {
            type: Object,
            default: {
                name: 'Guest'
            }
        }
    }
}
</script>

<style scoped>

</style>