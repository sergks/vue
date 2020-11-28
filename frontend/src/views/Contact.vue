<template>
  <div class="container contact">
    <h1>Наши контакты</h1>
    <p>{{page.text}}</p>
  </div>
</template>

<script>
  import Axios from "axios";

  export default {
    name: "Contact",
    data() {
      return {
        page: {}
      }
    },
    created() {
      this.$http.get('/page/contact')
          .then((response) => this.page = response.data)
    }
  }
</script>