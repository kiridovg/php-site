<template>
  <div class="product">
    <div class="col-mb-3 mb-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" width="100%" height="225" src="/../../../img.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ product_data.name }}</h5>
          <div class="">
            <p class="card-text">{{ product_data.price }}</p>
          </div>
          <a href="/product" class="btn btn-primary" @click="sendid">Купить</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "product",
  props: {
    product_data:{
      type: Object,
      default(){
        return{}
      }
    }
  },
  data() {
    return {}
  },

  methods: {
    sendid(){
      eventBus.$emit('upid', this.product_data.id);
    }
  }
}
</script>

<style scoped>
</style>