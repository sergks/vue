<template>
  <router-link class="nav-link" v-bind:to="{name: 'Cart'}">
    <span v-if="cart.count === 0">Корзина пуста</span>
    <span v-if="cart.count > 0">Корзина: {{cart.total}}</span>
  </router-link>
</template>

<script>
  import Cart from './cart'

  export default {
    name: "CartWidget",
    data() {
      let data = Cart
      data.load()
      return {
        cart: data
      }
    }
  }
</script>
