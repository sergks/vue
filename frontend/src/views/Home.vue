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
        items: [
          {
            id: 1,
            name: 'iPhone 11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
            price: 80000
          },
          {
            id: 2,
            name: 'Galaxy s10',
            image: 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
            price: 60000
          },
          {
            id: 3,
            name: 'ZTE Phone A11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
            price: 45000
          },
        ]
      }
    }
  }
</script>
