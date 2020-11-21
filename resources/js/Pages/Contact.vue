<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Contact
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <p class="m-4 mb-0">You can contact me in english or in german. That way I will be able to reply most quickly.</p>
          <form class="p-4" @submit.prevent="submit">

            <div v-if="$page.flash.success" class="p-2 text-sm text-center font-semibold bg-green-400 text-white rounded mb-4">
              <p v-text="$page.flash.success"></p>
            </div>

            <div class="flex flex-col mb-4">
              <label for="name">Name:</label>
              <input id="name" name="name" :class="[errors.email ? 'border-red-500' : 'border-indigo-400']" class="mt-2 p-2 border-2 rounded focus:border-indigo-600 focus:outline-none" type="text" v-model="form.name">
            </div>
            <div v-if="errors.name" class="p-2 text-sm text-center font-semibold bg-red-500 text-white rounded mb-4">
              <p v-text="errors.name"></p>
            </div>

            <div class="flex flex-col mb-4">
              <label for="email">E-Mail:</label>
              <input id="email" name="email" :class="[errors.email ? 'border-red-500' : 'border-indigo-400']" class="mt-2 p-2 border-2 rounded focus:border-indigo-600 focus:outline-none" type="email" v-model="form.email">
            </div>
            <div v-if="errors.email" class="p-2 text-sm text-center font-semibold bg-red-500 text-white rounded mb-4">
              <p v-text="errors.email"></p>
            </div>

            <div class="flex flex-col mb-4">
              <label for="message">Message:</label>
              <textarea name="message" id="message" :class="[errors.email ? 'border-red-500' : 'border-indigo-400']" class="mt-2 p-2 border-2 rounded focus:border-indigo-600 focus:outline-none" cols="30" rows="10" v-model="form.message"></textarea>
            </div>
            <div v-if="errors.message" class="p-2 text-sm text-center font-semibold bg-red-500 text-white rounded mb-4">
              <p v-text="errors.message"></p>
            </div>

            <input type="hidden" name="check" v-model="form.check">

            <div class="w-full text-center">
              <button v-if="!sending" type="submit" class="w-full md:w-1/3 p-4 text-xl text-white rounded bg-indigo-400 hover:underline hover:bg-indigo-600 focus:outline-none transition-colors duration-300">Submit</button>
              <button v-else type="submit" class="w-full md:w-1/3 p-4 text-xl text-white rounded bg-indigo-400 hover:underline hover:bg-indigo-600 focus:outline-none transition-colors duration-300">
                <div class="animate-spin">
                  <svg focusable="false" data-prefix="fas" data-icon="circle-notch" class="mx-auto h-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M288 39.056v16.659c0 10.804 7.281 20.159 17.686 23.066C383.204 100.434 440 171.518 440 256c0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-84.47 56.786-155.564 134.312-177.219C216.719 75.874 224 66.517 224 55.712V39.064c0-15.709-14.834-27.153-30.046-23.234C86.603 43.482 7.394 141.206 8.003 257.332c.72 137.052 111.477 246.956 248.531 246.667C393.255 503.711 504 392.788 504 256c0-115.633-79.14-212.779-186.211-240.236C302.678 11.889 288 23.456 288 39.056z"></path></svg>
                </div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import JetInputError from "@/Jetstream/InputError";

export default {
    name: "Contact",
    components: {
        AppLayout,
        JetInputError,
    },
    props: {
        errors: null
    },
    data() {
        return {
            sending: false,
            form: {
                name: null,
                email: null,
                message: null,
                check: null,
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.route('contact.send'), this.form, {
                onStart: () => this.sending = true,
                onFinish: () => this.sending = false,
            })
        }
    }
}
</script>

<style scoped>

</style>