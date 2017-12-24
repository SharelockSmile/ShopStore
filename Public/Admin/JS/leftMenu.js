$(function () {
    $(".firstli>span").click(function () {
        var ul = $(this).next("ul");
        if(ul.css("display")=="none"){
            ul.css("display","block");
        }else{
            ul.css("display","none");
        }
    });
})