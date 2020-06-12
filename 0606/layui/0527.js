var i = 1;

function add_div() {
    if (i >= 5) {

        alert("最多输入五条消费记录。");
    } else {
        var pdid = 'details' + i;
        $("#" + pdid + "").attr("style", "display:block;margin: 0px 0px 10px 0px;"); //隐藏div
        i++;
    }

};

function del_div1() {
    $("#details1").attr("style", "display:none;margin: 0px 0px 10px 0px;"); //隐藏div
    $("#input1").val(""); //隐藏div
    $("#select1").val(""); //隐藏div
    i--;

};

function del_div2() {
    $("#details2").attr("style", "display:none;margin: 0px 0px 10px 0px;"); //隐藏div
    $("#input2").val(""); //隐藏div
    $("#select2").val(""); //隐藏div
    i--;

};

function del_div3() {
    $("#details3").attr("style", "display:none;margin: 0px 0px 10px 0px;"); //隐藏div
    $("#input13").val(""); //隐藏div
    $("#select3").val(""); //隐藏div
    i--;

};

function del_div4() {
    $("#details4").attr("style", "display:none;margin: 10px 0px 0px 0px;"); //隐藏div
    $("#input4").val(""); //隐藏div
    $("#select4").val(""); //隐藏div
    i--;

};

function math() {
    var huiyuan = $("#huiyuan").val();
    var select0 = $("#select0").val();
    var select1 = $("#select1").val();
    var select2 = $("#select2").val();
    var select3 = $("#select3").val();
    var select4 = $("#select4").val();
    var input0 = $("#input0").val();
    var input1 = $("#input1").val();
    var input2 = $("#input2").val();
    var input3 = $("#input3").val();
    var input4 = $("#input4").val();
    var jifen = $("#jifen").val();

    var inputinfo = $("#form123").serialize();
    // var data2 = "";
    // data2 = select0 + select1 + select2 + select3 + select4 + inputinfo;
    //$("#txtHint").html(data2);
    //console.log(data2);
    //alert(data2);
    if ($("#huiyuan").val() == 0) {
        alert("请选择会员卡级！");
    } else {
        if ($("#select0").val() == 0) {
            if ($("#select1").val() == 0) {
                if ($("#select2").val() == 0) {
                    if ($("#select3").val() == 0) {
                        if ($("#select4").val() == 0) {
                            alert("请至少选择一家店铺。");
                        }
                    }
                }
            }
            $("#txtHint").attr("style", "display:none;");
            //隐藏div
        } else {
            $("#txtHint").attr("style", "display:block;");

            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "b.php", //url
                data: {
                    "jifen":jifen,
                    "huiyuan": huiyuan,
                    "select0": select0,
                    "select1": select1,
                    "select2": select2,
                    "select3": select3,
                    "select4": select4,
                    "input0": input0,
                    "input1": input1,
                    "input2": input3,
                    "input3": input3,
                    "input4": input4,
                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#txtHint").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });
            // $.ajax({
            //     //几个参数需要注意一下
            //     type: "POST", //方法类型
            //     //dataType: "json",//预期服务器返回的数据类型
            //     url: "g.php", //url
            //     data: {
            //         "huiyuan": huiyuan,
            //         "select0": select0,
            //         "select1": select1,
            //         "select2": select2,
            //         "select3": select3,
            //         "select4": select4,
            //         "input0": input0,
            //         "input1": input1,
            //         "input2": input3,
            //         "input3": input3,
            //         "input4": input4,
            //     },
            //     success: function (result) {
            //         //console.log(result);//打印服务端返回的数据(调试用)
            //         $("#saleinfo5").html(result);
            //         //console.log(data2);
            //     },
            //     error: function () {
            //         alert("异常！");
            //     }
            // });
            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "a.php", //url
                data: {
                    "huiyuan": huiyuan,
                    "select0": select0,
                    "select1": select1,
                    "select2": select2,
                    "select3": select3,
                    "select4": select4,
                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#saleinfo0").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });
            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "c.php", //url
                data: {
                    "huiyuan": huiyuan,
                    "select0": select0,
                    "select1": select1,
                    "select2": select2,
                    "select3": select3,
                    "select4": select4,
                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#saleinfo1").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });
            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "d.php", //url
                data: {
                    "select2": select2,
                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#saleinfo2").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });
            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "e.php", //url
                data: {

                    "select3": select3,

                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#saleinfo3").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });
            $.ajax({
                //几个参数需要注意一下
                type: "POST", //方法类型
                //dataType: "json",//预期服务器返回的数据类型
                url: "f.php", //url
                data: {

                    "select4": select4,
                },
                success: function (result) {
                    //console.log(result);//打印服务端返回的数据(调试用)
                    $("#saleinfo4").html(result);
                    //console.log(data2);
                },
                error: function () {
                    alert("异常！");
                }
            });

        }

    }

}