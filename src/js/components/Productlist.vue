<template>
  <div class="container mt-5 mb-5">
    <productsort @sort="sorti"/>
    <div class="row row-cols-sm-3">
      <product
          v-for="product in products" :key="product.id"
          :product_data="product"
      />
    </div>
  </div>
</template>

<script>
import product from "./Product.vue";
import productsort from "./ProductSort.vue";

export default {
  name: "productlist",
  data() {

    return {
      sort: 'idASC',
      products: {},
    }
  },
  created() {
    this.sorti(this.sort);
  },
  components: {product, productsort},
  methods: {
    getProducts: async (sort) => {
      let response = await fetch(`/api/${sort}/`, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        },
      });
      const products = response.json();
      return products;
    },
    sorti(type) {
      this.products = this.getProducts( this.sort = type).then((products) => {
        this.products = products;
      });
    }
  },
}
</script>

<style scoped>
</style>