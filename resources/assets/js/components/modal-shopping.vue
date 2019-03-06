<template>
  <div class="hello">
    <div class="text-right">
      <button
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#cartModal"
      >Cart ({{cartItems.length}})</button>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="cartModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Cart</h4>
          </div>
          <div class="modal-body">
            <cart-products  v-bind:items="cartItems">
              <!-- /.container -->
            </cart-products>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <h1>Product List</h1>
    <ul>
      <li v-for="product in products" :key="product.id">
        {{product.title}} - {{product.price}} - {{product.inventory}}
        <button
          @click="addToCart(product)"
          class="btn btn-sm btn-primary"
        >Add to Cart</button>
      </li>
    </ul>
  </div>
</template>

<script>
import shop from "../api/shop";
//vm.$forceUpdate();
export default {
  data() {
    return {
      products: [],
      cartItems: []
    };
  },
  created() {
    shop.getProducts(products => {
      this.products = products;
      console.log(this.products);
    });
  },
  methods: {
    addToCart(itemToAdd) {
      console.log("Start add to cart!");
      var found = false;

      // Check if the item was already added to cart
      // If so them add it to the qty field
      if (itemToAdd.inventory > 0) {
        this.cartItems.forEach(product => {
          if (product.id === itemToAdd.id) {
            found = true;
            product.quantity++;
          }
        });

        if (found === false) {
          this.cartItems.push({
            id: itemToAdd.id,
            title: itemToAdd.title,
            src: itemToAdd.src,
            quantity: 1,
            price: itemToAdd.price
          });
        }

        itemToAdd.inventory--;
      }
    }
  }
};
</script>
