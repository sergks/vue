<template>
  <div class="product text-center mb-5">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    <h2>{{product.name}}</h2>
    <p>Стоиость: {{product.price}}</p>
    <p>
      <button class="btn btn-secondary" v-on:click="addToCart">Купить</button>
    </p>
  </div>
</template>

<script>
  export default {
    name: "Product",
    props: ['product'],
    methods: {
      addToCart() {
        alert('Товар ' + this.product.name + ' добавлен в корзину.')
      }
    }
  }
</script>
