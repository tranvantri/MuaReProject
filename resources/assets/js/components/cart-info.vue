<template>
  <p>XIn chao 123</p>
  <div class="flex-container" style="display:flex;padding: 10px;border-bottom: 1px solid #dcdcdc;">
    <div
      style="flex-basis: 100px; border: 1px solid #e1e1e1; text-align: center;"
    >
      <img
        class="mrf-img-view"
        style="height: 72px;"
        src="https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/22/5017100_1508406942-mc3a1ychie1babfuepsoneb-x05.jpg"
        alt="Máy chiếu Epson EB-X05 rẻ nhất miền bắc"
      />
    </div>
    <div style="flex-grow: 9; margin-left: 10px; ">
      <p class="text-primary" style="margin: 0">
        Máy chiếu Epson EB-X05 rẻ nhất miền bắc
      </p>
      <div style="display: flex;">
        <div style="flex-grow:3">
          Số lượng: &nbsp;
          <input
            type="text"
            style="width: 30px;border: 0.5px solid grey;text-align: center;"
            maxlength="3"
          />
        </div>
        <div style="flex-grow:3">
          Giá: &nbsp;8.000.000 đ
        </div>
        <div class="" style="flex-grow:3;">
          Thành tiền: &nbsp;<span class="text-danger" style="font-weight: bold;"
            >8.000.000 đ</span
          >
        </div>
      </div>
    </div>
    <div style="flex-grow: 1; margin-top: 20px">
      <span><i class="fas fa-trash-alt text-danger"></i></span>
    </div>
  </div>
  <!-- <div class="row">
      <div class="col-xs-1">
        <p class="text-primary" style="margin: 0">
          Máy chiếu Epson EB-X05 rẻ nhất miền bắc
        </p>
      </div>
      <div class="col-xs-10">
        <div class="d-flex">
          <div class="d-flex">
            Số lượng: &nbsp;
            <div>
              <input
                type="text"
                style="width: 30px;border: 0.5px solid grey;text-align: center;"
                maxlength="3"
              />
            </div>
          </div>
          <div class="" style="margin-left: 5px">
            Đơn giá: &nbsp;100.000 đ
          </div>
          <div class="" style="margin-left: 15px">
            Thành tiền: &nbsp;<span class="text-danger">100.000 đ</span>
          </div>
          
        </div>
      </div>
    </div>
      <div class="col-xs-1" style="margin-left: 15px">
          Delete
  </div>-->
</template>

<script>
  export default {
    mounted() {
      console.log("Component mounted.");
    }
  };
</script>
