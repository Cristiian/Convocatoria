$(document).ready(function () {
    //$("#btn").prop("disabled", false);
    $("#chkb").prop("checked", false);

    //$("#body").keypress(function (event) {
    $("#instrucciones").focus();//focus en checkbox aceptar terminos
    //$(document).prop("")
    $(document).keypress(function (event) {
        var key = event.which;
        console.log("key:" + key);
        if (key == 97) {//letra a
            $("#chkb").focus();//focus en checkbox aceptar terminos
        }
        if (key == 122) {//letra a
            $("#instrucciones").focus();//focus en checkbox aceptar terminos
        }
    });//*/
    //122 letra z
    $('div[name=Adesc]').hide();
    ///////////////////////////////////////////////
    var path = window.location.pathname;
    var page = path.split("/").pop();
    console.log("1. page:"+page);
    //alert(page);
    var num = page.charAt(4);
    if (page=="") {
         $("#chkb").click(function () {
            var checked = $(this).prop("checked");
            if (checked == true) {
                $("#chkb").prop("checked", false);
                window.location.assign("paso1");
            }
        });
    }else

    if (page == "index.php" ) {
        // alert("estoy en: " + page);
        $("#chkb").click(function () {
            var checked = $(this).prop("checked");
            if (checked == true) {
                $("#chkb").prop("checked", false);
                window.location.assign("paso1");
            }
        });
    } else

    if (page == "cons" ) {
        // alert("estoy en: " + page);
        $("#chkb").click(function () {
            var checked = $(this).prop("checked");
            if (checked == true) {
                $("#chkb").prop("checked", false);
                window.location.assign("registro/create");
            }
        });
    } 


else {
        //alert("estoy en: " + page);
        $("#chkb").click(function () {
            var checked = $(this).prop("checked");
            console.log(checked);
            if (checked == true) {
                //alert(checked);

                if (num == 1) {
                    $("#chkb").prop("checked", false);
                    window.location.assign("paso2");
                }
                if (num == 2) {
                    $("#chkb").prop("checked", false);
                    window.location.assign("paso3");
                }
                if (num == 3) {
                    $("#chkb").prop("checked", false);
                    window.location.assign("paso4");
                }
                if (num == 4) {
                    $("#chkb").prop("checked", false);
                    window.location.assign("paso5");
                }
                if (num == 5) {
                    $("#chkb").prop("checked", false);
                    window.location.assign("cons");
                }
            }
        });
    }





});