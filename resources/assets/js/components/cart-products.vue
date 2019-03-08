<template>
  <div>
    <!-- <table class="table table-cart">
      <tr v-for="item in items" :key="item.id">
        <td>{{item.title}}</td>
        <td style="width:120px">
          QTY:
          <input v-model="item.quantity" class="form-control input-qty" type="number">
        </td>
        <td class="text-right">${{item.price | formatCurrency}}</td>
        <td>
          <button @click="removeItem(index)">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
        </td>
      </tr>
      <tr v-show="items.length === 0">
        <td colspan="4" class="text-center">Cart is empty</td>
      </tr>
      <tr v-show="items.length > 0">
        <td></td>
        <td class="text-right">Cart Total</td>
        <td class="text-right">${{Total | formatCurrency}}</td>
        <td></td>
      </tr>
    </table>-->
    <div
      class="flex-container"
      style="display:flex;padding: 10px;border-bottom: 1px solid #dcdcdc;"
      v-for="item in items"
      :key="item.id"
    >
      <div style="flex-basis: 100px; border: 1px solid #e1e1e1; text-align: center;">
        <img
          class="mrf-img-view"
          style="height: 72px;"
          v-bind:src="item.src"
          alt="Máy chiếu Epson EB-X05 rẻ nhất miền bắc"
        >
      </div>
      <div style="flex-grow: 9; margin-left: 10px; ">
        <p class="text-primary" style="margin: 0">{{item.title}}</p>
        <div style="display: flex;">
          <div style="flex-grow:3">
            Số lượng: &nbsp;
            <input
              type="number"
              style="width: 40px;border: 0.5px solid grey;text-align: center;"
              maxlength="3"
              value
              v-model="item.quantity"
            >
          </div>
          <div style="flex-grow:3">Giá: &nbsp;{{item.price}} đ</div>
          <div class style="flex-grow:3;">
            Thành tiền: &nbsp;
            <span class="text-danger" style="font-weight: bold;">8.000.000 đ</span>
          </div>
        </div>
      </div>
      <div style="flex-grow: 1; margin-top: 20px">
        <button class="btn" @click="removeItem(index)">
          <span>
            <i class="fas fa-trash-alt text-danger"></i>
          </span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["items"],

  computed: {
    Total: function() {
      var total = 0;
      this.items.forEach(item => {
        total += item.price * item.qty;
      });
      return total;
    }
  },

  methods: {
    removeItem(index) {
      this.items.splice(index, 1);
    }
  }
};
</script>
