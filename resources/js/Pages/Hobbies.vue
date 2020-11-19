<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Hobbies
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-2 mx-4 text-center bg-white border-b border-gray-200 flex">
            <h2 class="text-2xl flex-1">Hobbies</h2>
          </div>

          <div class="mx-2 my-2 flex flex-col md:flex-row">
            <div class="shadow rounded m-2 flex-1">
              <h3 class="m-2 text-xl border-b border-gray-200 text-center">Music</h3>
              <img src="/img/S1.6HLB-DETAIL.png" alt="My Solar Guitars S1.6HLB">
              <div class="p-6">
                <p>
                  I first started playing drums when I was 6 years old and played it till I was 12. Due to
                  some personal troubles I dropped it and only started to get back into music when I picked up an old
                  guitar we had laying around when I was 17. I am now playing guitar regularly and acquired a bass
                  guitar to make some music for my self. It helps calming me and also to rebuild my mental energy.
                </p>
              </div>
            </div>

            <div class="p-2 shadow rounded m-2 flex-1">
              <h3 class="text-xl border-b border-gray-200 text-center">Programming</h3>
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
    name: "Hobbies",
    components: {
        AppLayout,
    }
}
</script>

<style scoped>

</style>