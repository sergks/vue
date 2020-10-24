<template>
  <div class="container profile">
    <h1>{{user.email}}</h1>
    <button class="btn btn-danger" v-on:click="logout">Выйти</button>
  </div>
</template>

<script>
  import User from '@/components/user/user'
  export default {
    name: "Profile",
    data() {
      return {
        user: User
      }
    },
    methods: {
      logout() {
        this.user.logout()
      }
    }
  }
</script>
