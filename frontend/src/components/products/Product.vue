<template>
  <div class="product mb-5">
    <div class="form-group text-center">
      <img class="img-fluid" v-bind:src="product.image">
    </div>
    <h3>{{product.name}}</h3>
    <p>Стоимость: {{product.price}}</p>
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
