<template>
  <div class="home">
    <Carousel></Carousel>
    <div class="container">
      <div class="row">
        <div class="col-lg-4" v-for="item in items">
          <Product v-bind:product="item"></Product>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import Carousel from "@/components/Carousel";
  import Product from "@/components/products/Product";
  export default {
    name: 'Home',
    components: {Product, Carousel},
    data() {
      return {
        items: []
      }
    },
    created() {
      this.$http.get('/product/home')
          .then((response) => this.items = response.data)
    }
  }
</script>
