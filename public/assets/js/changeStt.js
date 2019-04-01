$("select.combo-status-bill").change(function(){
    var status = $(this).children("option:selected").val();
    var idBill = $(this).attr("data-idbill");
    var idShop = $(this).attr("data-idshop");
    // console.log("Bill có id: " + id + " thay đổi trạng thái: " + status);
    $.get("change-status-bill", {idBill: idBill,idShop :idShop,stt:status}, function (data) {
        // console.log(data);
    });
});