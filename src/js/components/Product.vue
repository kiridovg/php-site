<template>
  <div class="col-mb-3 mb-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" width="100%" height="225" src="/../../../img.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{name}}</h5>
        <div class="">
          <p class="card-text">{{price}}</p>
        </div>
        <a href="#" class="btn btn-primary" :href="'/product/'+id+'/'">Купить</a>
      </div>
    </div>

  </div>

</template>

<script>
export default {
  name: "product",
  props: {
    id: {
      type: String,
      require: true
    },
    name: {
      type: String,
      required: true
    },
    price: {
      type: String,
      require: true
    },
    count: {
      type: String,
      require: true
    },
  },
  methods: {
    setId(id) {
      this.$root.$emit('setId', id);
    }
  }
}
</script>

<style scoped>
</style>