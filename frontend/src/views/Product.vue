<template>
  <div class="container product">
    <h1>{{product.name}}</h1>
    <p>
      <img style="max-width: 400px" v-bind:src="product.image">
    </p>
    <p>URL: {{product.url}}</p>
  </div>
</template>

<script>
  export default {
    name: "Product",
    data() {
      return {
        product: {}
      }
    },
    created() {
      const url = this.$route.params.url
      // Send Ajax Request (id)
      const result = {
        id: 1,
        url: url,
        name: 'iPhone 11',
        image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
        price: 80000
      }

      this.product = result
    }
  }
</script>
