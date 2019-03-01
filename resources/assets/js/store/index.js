import Vue from "vue";
import Vuex from "vuex";
import shop from "../api/shop";
import { promised, resolve, reject, Promise } from "q";
Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    // = data
    products: [],
    //productId, quantity
    cart:[]
  
  },
  getters: {
    // = computed propertises
    availableProducts(state, getters) {
      return state.products.filter(product => product.inventory > 0);
    }
  },
  actions: {
    //=methods
    fetchProducts({ commit }) {
      //Make the call
      return new Promise((resolve, reject) => {
        shop.getProducts(products => {
          commit("setProducts", products);
          console.log(products);
          resolve();
        });
      });
    },
    addProductToCart(context, product) {
      const cartItem = context.state.cart.find(item => item.id === product.id)
      if(product.inventory>0){
        if (!cartItem) {
          context.commit("pushProductToCart", product.id);
        } else {
          //increament Item Quantity
          context.commit("incrementItemQuantity", cartItem);
        }
        context.commit("decrementProductInventory", product);
      }
    }
  },
  mutations: {
    setProducts(state, products) {
      //update products
      state.products = products;
    },
    pushProductToCart(state, productId) {
      state.cart.push({
        id: productId,
        quantity: 1
      });
    },
    incrementItemQuantity(state, cartItem) {
      cartItem.quantity++;
    },
    decrementProductInventory(state, product) {
      product.inventory--;
    }
  }
});
