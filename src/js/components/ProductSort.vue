<template>
  <div class="d-flex mb-5">
    <a class="btn btn-primary mr-3" @click="sort('priceASC')">Цена ↑</a>
    <a class="btn btn-primary mr-3" @click="sort('priceDESC')">Цена ↓</a>
    <a class="btn btn-primary mr-3" @click="sort('idASC')">ID ↑</a>
    <a class="btn btn-primary mr-3" @click="sort('idDESC')">ID ↓</a>
  </div>
</template>

<script>
export default {
  name: "productsort",
  props: {},
  methods: {
    sort(type) {
      this.$emit('sort', type);
    }
  }
}
</script>

<style scoped>
</style>