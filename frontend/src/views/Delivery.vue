<template>
  <div class="container delivery">
    <h1>Доставка и оплата</h1>
    <p>{{page.text}}</p>
  </div>
</template>

<script>
  import Axios from "axios";

  export default {
    name: "Delivery",
    data() {
      return {
        page: {}
      }
    },
    created() {
      this.$http.get('/page/delivery')
          .then((response) => this.page = response.data)
    }
  }
</script>
