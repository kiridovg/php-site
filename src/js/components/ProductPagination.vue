<template>
  <a :class="'btn btn-primary mx-2'" @click="thisPage(page)">{{page}}</a>
</template>

<script>
export default {
  name: "productpagination",
  props: [
    'page'
  ],
  methods: {
    thisPage(pageid) {
      this.$emit('pagest', pageid)
    }
  },
}
</script>

<style scoped>
</style>