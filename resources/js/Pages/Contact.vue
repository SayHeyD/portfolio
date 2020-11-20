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
            <div class="flex flex-col mb-4">
              <label for="name">Name:</label>
              <input id="name" name="name" class="mt-2 p-2 border-2 border-indigo-400 rounded focus:border-indigo-600 focus:outline-none" type="text" v-bind="form.name" required>
            </div>

            <div class="flex flex-col mb-4">
              <label for="email">E-Mail:</label>
              <input id="email" name="name" class="mt-2 p-2 border-2 border-indigo-400 rounded focus:border-indigo-600 focus:outline-none" type="email" v-bind="form.email" required>
            </div>

            <div class="flex flex-col mb-4">
              <label for="message">Message:</label>
              <textarea name="message" id="message" class="mt-2 p-2 border-2 border-indigo-400 rounded focus:border-indigo-600 focus:outline-none" cols="30" rows="10" v-bind="form.message" required></textarea>
            </div>

            <div class="w-full text-center">
              <button type="submit" class="w-full md:w-1/3 p-4 text-xl text-white rounded bg-indigo-400 hover:underline hover:bg-indigo-600 transition-colors duration-300">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Contact",
    components: {
        AppLayout
    },
    data() {
        return {
            sending: false,
            form: {
                name: null,
                email: null,
                message: null,
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.route('organizations.store'), this.form, {
                onStart: () => this.sending = true,
                onFinish: () => this.sending = false,
            })
        }
    }
}
</script>

<style scoped>

</style>