$("select.combo-status-bill").change(function(){
    var status = $(this).children("option:selected").val();
    var id = $(this).attr("data-id");
    console.log("Bill có id: " + id + " thay đổi trạng thái: " + status);
    $.get("change-status-bill", {id: id,stt:status}, function (data) {
        // console.log(data);
    });
});