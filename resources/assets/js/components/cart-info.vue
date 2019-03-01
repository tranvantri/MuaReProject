<template>
  <div class="flex-container" style="display:flex;padding: 10px;border-bottom: 1px solid #dcdcdc;">
    <div style="flex-basis: 100px; border: 1px solid #e1e1e1; text-align: center;">
      <img
        class="mrf-img-view"
        style="height: 72px;"
        v-bind:src="postProduct.src"
        alt="Máy chiếu Epson EB-X05 rẻ nhất miền bắc"
      >
    </div>
    <div style="flex-grow: 9; margin-left: 10px; ">
      <p class="text-primary" style="margin: 0">{{postProduct.title}}</p>
      <div style="display: flex;">
        <div style="flex-grow:3">
          Số lượng: &nbsp;
          <input
            type="number"
            style="width: 40px;border: 0.5px solid grey;text-align: center;"
            maxlength="3"
            value
            v-model="postProduct.inventory"
          >
        </div>
        <div style="flex-grow:3">Giá: &nbsp;{{postProduct.price}} đ</div>
        <div class style="flex-grow:3;">
          Thành tiền: &nbsp;
          <span class="text-danger" style="font-weight: bold;">8.000.000 đ</span>
        </div>
      </div>
    </div>
    <div style="flex-grow: 1; margin-top: 20px">
      <span>
        <i class="fas fa-trash-alt text-danger"></i>
      </span>
      <button @click="addProductToCart(postProduct)">Add</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["postProduct"],
  methods: {
    addProductToCart(product) {
      this.$store.dispatch("addProductToCart", product);
    }
  }
};
</script>
