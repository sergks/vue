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
      const instance = Axios.create({
        baseURL: 'http://localhost:1199/v1'
      });

      instance.get('/page/delivery')
          .then((response) => this.page = response.data)
    }
  }
</script>
