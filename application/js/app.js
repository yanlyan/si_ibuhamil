
$("a[data-ctrl]").click(function () {
    $("#panel-content").empty();
    loading(true);
    var view = $(this).attr("data-view");
    var ctrl = $(this).attr("data-ctrl");
    $.ajax({
        url: base_url + "/main/" + ctrl + "/" + view,
        type: "post",
        data: {konten: $(this).attr("data-param")},
        success: function (data) {
            setTimeout(function () {
                loading(false);
                $("#panel-content").html(data);
            }, 3500);
        }
    });
});
$("button").click(function () {
    console.log("ccc");
    /*$.ajax({
     url     : base_url+"/main/info_penyakit/gejala-anemia",
     type    : "post",
     success : function(data){
     $("#panel-content").empty();
     $("#panel-content").html(data);
     }
     });*/
});

function loading(action) {
    if (action) {
        $("#loading").show();
    } else {
        $("#loading").hide();
    }
}