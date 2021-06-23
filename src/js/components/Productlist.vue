<template>
  <div class="container mt-5 mb-5">
    <productsort @sort="sorti"/>
    <div class="row row-cols-sm-3">
      <product
          v-for="product in productsPag" :key="product.id"
          :product_data="product"
      />
    </div>
    <div class="d-flex justify-content-center">
      <productpagination v-for="page in pages" :key="page"
                         :page="page"
                         @pagest="getpageId"
      />
    </div>
  </div>
</template>

<script>
import product from "./Product.vue";
import productsort from "./ProductSort.vue";
import productpagination from "./ProductPagination.vue";

export default {
  name: "productlist",
  data() {
    return {
      sort: 'idASC',
      products: {},
      productsPag: {},
      countPages: 5,
      pageId: 1,
    }
  },
  created() {
    this.sorti(this.sort);
    this.update();
  },
  computed: {
     pages() {return Math.ceil(this.products.length / this.countPages)},
  },
  components: {product, productsort, productpagination},
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
      this.products = this.getProducts(this.sort = type).then((products) => {
        this.products = products;
      });
    },
    getpageId(pageid) {
      this.pageId = pageid;
      let from = (this.pageId - 1) * this.countPages;
      this.productsPag = this.products.slice(from, from + this.countPages);
    },
  },
}
</script>

<style scoped>
</style>