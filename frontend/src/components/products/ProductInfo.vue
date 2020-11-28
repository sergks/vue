<template>
  <section class="row">
    <div class="col-md-4">
      <img class="img-fluid" v-bind:src="product.image">
    </div>
    <div class="col-md-8">
      <h1>{{product.name}}</h1>
      <p class="lead">{{product.category.name}}</p>
      <table class="table table-bordered table-striped">
        <tbody>
        <tr v-for="propertyValue in product.propertiesValues">
          <td>
            <b>{{propertyValue.property.name}}</b>
          </td>
          <td>
            {{propertyValue.value}}
          </td>
        </tr>
        </tbody>
      </table>
      <p>
        <strong class="price">{{product.formattedPrice}}</strong>
      </p>
      <p>
        <button class="btn btn-secondary" v-on:click="addToCart">Купить</button>
      </p>
    </div>
  </section>
</template>

<script>
  import CartData from "@/components/cart/cart";

  export default {
    name: "ProductInfo",
    props: ['product'],
    methods: {
      addToCart() {
        CartData.add(this.product)
      }
    }
  }
</script>
