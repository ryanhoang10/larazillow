<template>
  <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listing</Link>
        </div>
        <div class="text-lg text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">LaraZillow</Link>
        </div>
        <div v-if="user" class="flex items-center gap-4">
          <Link :href="route('realtor.listing.index')" class="text-sm text-gray-500">{{ user.name }}</Link>
          <Link :href="route('listing.create')" class="btn-primary">+ New Listing</Link>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('login')">Sign-In</Link>
          <Link :href="route('user-account.create')">Register</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>

  </main>

  <slot />

</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3'

const flashSuccess = computed(
  () => usePage().props.flash.success
)

const user = computed(
  () => usePage().props.user
)

</script>