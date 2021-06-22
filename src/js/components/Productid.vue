<template>
  <div class="container mt-5 mb-5">
    <div class="row row-cols-sm-3">{{id}}
      <product
          v-for="product in productid" :key="product.id"
          :product_data="product"
          @upid="setid"
      />
    </div>
  </div>
</template>

<script>
import product from "./Product.vue";
import productlist from "./Productlist.vue";

export default {
  name: "productid",
  data(){
    return{
      id: 1,
      productid: {},
    }
  },
  created() {
    eventBus.$on('upid', this.upid);
    this.productid = this.getproductid().then((productid) => {
      this.productid = productid;
    });
  },
  components: {product,productlist},
  methods: {
    getproductid: async () => {
      let response = await fetch(`/product/1/`, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        },
      });
      const productid = response.json();
      return productid;
    },
    upid(id){
      console.log(id);
    }
  },
}
</script>

<style scoped>
</style>