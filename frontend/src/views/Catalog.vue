<template>
  <div class="container catalog">
    <h1>Каталог товаров</h1>
    <ProductsList></ProductsList>
  </div>
</template>

<script>
  import ProductsList from "@/components/products/ProductsList";

  export default {
    name: "Catalog",
    components: {ProductsList}
  }
</script>

<style scoped>

</style>