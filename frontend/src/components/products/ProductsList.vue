<template>
  <div class="row">
    <div class="col-md-3">
      <div class="filter">
        <h5>Производитель</h5>
        <ul class="list-unstyled">
          <li v-for="company in filter.companies">
            <label>
              <input type="checkbox"> {{company}}
            </label>
          </li>
        </ul>
        <hr>
      </div>
      <div class="filter">
        <h5>Дисплей</h5>
        <ul class="list-unstyled">
          <li v-for="display in filter.displays">
            <label>
              <input type="checkbox"> {{display}}
            </label>
          </li>
        </ul>
        <hr>
      </div>
      <div class="filter">
        <h5>Стоимость</h5>
        <div class="d-flex">
          <input type="number" class="form-control" placeholder="от">
          <input type="number" class="form-control" placeholder="до">
        </div>
        <hr>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-lg-4" v-for="item in items">
          <Product v-bind:product="item"></Product>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import Product from "@/components/products/Product";

  export default {
    name: "ProductsList",
    components: {Product},
    data() {
      return {
        filter: {
          companies: ['Apple', 'Samsung', 'Sony'],
          displays: [5.0, 5.5, 6.0, 6.7]
        },
        items: [
          {
            id: 1,
            name: 'iPhone 11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 80000
          },
          {
            id: 2,
            name: 'Galaxy s10',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 60000
          },
          {
            id: 3,
            name: 'ZTE Phone A11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 45000
          },
          {
            id: 1,
            name: 'iPhone 11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 80000
          },
          {
            id: 2,
            name: 'Galaxy s10',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 60000
          },
          {
            id: 3,
            name: 'ZTE Phone A11',
            image: 'https://cdn1.ozone.ru/s3/multimedia-j/wc1200/6025842691.jpg',
            price: 45000
          }
        ]
      }
    }
  }
</script>
