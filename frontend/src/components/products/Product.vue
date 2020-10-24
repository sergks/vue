<template>
  <div class="product mb-5">
    <div class="form-group text-center">
      <img class="img-fluid" v-bind:src="product.image">
    </div>
    <h3>
      <router-link v-bind:to="{name: 'Product', params: {url: product.url}}">
        {{product.name}}
      </router-link>
    </h3>
    <p>Стоимость: {{product.price}}</p>
    <p>
      <button class="btn btn-secondary" v-on:click="addToCart">Купить</button>
    </p>
  </div>
</template>

<script>
  import CartData from '@/components/cart/cart'
  export default {
    name: "Product",
    props: ['product'],
    methods: {
      addToCart() {
        CartData.add(this.product)
        // Send Ajax Request
      }
    }
  }
</script>
