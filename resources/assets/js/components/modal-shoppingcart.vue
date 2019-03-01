<template>
  <div class="container">
    <button
      type="button"
      class="btn btn-primary"
      data-toggle="modal"
      data-target="#exampleModal"
    >Add to cart</button>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="scroll-pane" style="width: 100%;max-height: 300px;overflow: auto;">
              <img
                v-if="loading"
                src="https://i.imgur.com/JfPpwOA.gif"
                style="display: block; margin-left: auto; margin-right: auto;"
              >
              <cart-info
                v-else
                v-for="product in products"
                :key="product.id"
                v-bind:postProduct="product"
              >
              </cart-info>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import shop from "../api/shop";
// import store from "../store/index";
export default {
  data() {
    return {
      loading: false
    };
  },
  computed: {
    products() {
      console.log("Test");
      return this.$store.getters.availableProducts;
    }
  },
  methods: {
    addProductToCart(product) {
      this.$store.dispatch("addProductToCart", product);
    }
  },
  created() {
    this.loading = true;
    this.$store.dispatch("fetchProducts").then(() => (this.loading = 0));
  }
};
</script>
