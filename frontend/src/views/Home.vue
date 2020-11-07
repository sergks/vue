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
  import Axios from 'axios';
  export default {
    name: 'Home',
    components: {Product, Carousel},
    data() {
      return {
        items: []
      }
    },
    created() {
      const instance = Axios.create({
        baseURL: 'http://localhost:1199/v1'
      });

      instance.get('/product/home')
        .then((response) => this.items = response.data)
    }
  }
</script>
