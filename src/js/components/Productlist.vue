<template>
    <div class="container mt-5 mb-5">
      <div class="row row-cols-sm-3">
        <product v-for="product in products" :key="product.id"
                 :id="product.id"
                 :name="product.name"
                 :price="product.price"
                 :count="product.count"
        >
        </product>
      </div>
    </div>
</template>

<script>
import product from "./Product.vue";

export default {
  name: "product_list",
  data(){
    return{
      products: {},
    }
  },
  created() {
    this.products = this.getProducts().then((products) => {
      this.products = products;
    });
  },
  components: {product},
  methods: {
    getProducts: async () => {
      let response = await fetch(`/api`, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        },
      });
      const products = response.json();
      return products;
    },
  },
}
</script>

<style scoped>
</style>