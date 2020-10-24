<template>
  <div class="container profile">
    <h1>{{user.name}}</h1>
    <h4>{{user.email}}</h4>
    <hr>
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
        User.logout()
        //location.reload()
      }
    }
  }
</script>
