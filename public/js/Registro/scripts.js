$(document).ready(function () {
    //$("#btn").prop("disabled", false);
    $("#chkb").prop("checked", false);

    //$("#body").keypress(function (event) {
    
    //$(document).prop("")
    $(document).keypress(function (event) {
        var key = event.which;
        console.log("key:" + key);
        if (key == 97) {//letra a
            $("#chkb").focus();//focus en checkbox aceptar terminos
        }
    });//*/
    //122 letra z
    $('div[name=Adesc]').hide();
    ///////////////////////////////////////////////
    var path = window.location.pathname;
    var page = path.split("/").pop();
    console.log("1. page:"+page);
    //alert(page);
    
});