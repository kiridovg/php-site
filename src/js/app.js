window.Vue = require('vue')

Vue.component('productlist', require('./components/Productlist.vue').default)
Vue.component('product', require('./components/Product.vue').default)
Vue.component('productid', require('./components/Productid.vue').default)
Vue.component('productsort', require('./components/ProductSort.vue').default)
Vue.component('productpagination', require('./components/ProductPagination.vue').default)



const app = new Vue({
  el: '#app',
})

const eventBus = new Vue()
