$(function () {
    $("#btnId").click(function () {
        var className=document.getElementById("className").value;
        var classId=document.getElementById("selId").value;
        //alert(className+"----"+classId);
        $.ajax({
            url:"ProcessAddClass.php",
            type:"post",
            dataType:"text",
            data:{
                "cName":className,
                "cId":classId
            },
            success:function (data) {
                //alert(data);
                if (data=="1")
                {
                    alert("Add Successful");
                    window.location="showClass.php";
                }
                else if (dtat=="0")
                {
                    alert("Add False");
                    window.location.replace("addClass.php");
                }
            },
            error:function (data) {
                alert("Error");
            }
        });
    });
    $("#btnRepeal").click(function () {

    });
})