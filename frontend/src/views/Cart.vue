<template>
  <div class="container cart">
    <h1>Ваши товары</h1>
    <div class="empty" v-if="cart.count === 0">Пока нет ни одного товара.</div>
    <div v-if="cart.count > 0">
      <table class="table">
        <thead>
          <tr>
            <th>Товар</th>
            <th>Стоимость</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in cart.products">
            <td>
              <img class="cart-image" v-bind:src="product.image">
              <br>
              {{product.name}}
            </td>
            <td>
              {{product.price}} ₽
            </td>
            <td>
              <button class="btn btn-danger btn-sm" v-on:click="remove(product)">Удалить</button>
            </td>
          </tr>
          <tr>
            <td><strong>Итого:</strong></td>
            <td colspan="2"><strong>{{cart.total}} ₽</strong></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
  import Cart from '@/components/cart/cart'
  export default {
    name: "Cart",
    data() {
      let data = Cart
      data.load()
      return {
        cart: data
      }
    },
    methods: {
      remove(item) {
        this.cart.remove(item)
      }
    }
  }
</script>
