<template>
  <div class="container product">
    <ProductInfo v-bind:product="product"></ProductInfo>
  </div>
</template>

<script>
  import ProductInfo from "@/components/products/ProductInfo";
  export default {
    name: "Product",
    components: {ProductInfo},
    data() {
      return {
        product: {}
      }
    },
    created() {
      const url = this.$route.params.url
      this.$http.get('/product/info', {params: {url: url}})
        .then((response) => this.product = response.data)
    }
  }
</script>
