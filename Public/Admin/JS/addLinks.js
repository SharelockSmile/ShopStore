$(function () {
    var reg=/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(([A-Za-z0-9-~]+)\.)+([A-Za-z0-9-~\/])+$/;
    $("#addLinks").click(function () {
        if(!reg.test(url))
        {
            alert("这个网址不是以http://或https://开头，不是网址！");
        }else
            {
                alert("输入成功");
                var Name=$_POST["txtName"];
                var url=$_POST["txtURL"];
                $.ajax({
                    url:"ProcessLink.php",
                    type:"post",
                    dataType:"text",
                    data:
                        {
                            "linkName":Name,
                            "linkURL":url
                        },
                    success:function (data) {
                        if (data=="1")
                        {
                            alert("Add Success");
                            window.location="shoeLinks.php";
                        }else if (data==0)
                        {
                            alert("Add False");
                        }
                    },
                    error:function (data) {
                        alert("Error");
                    }
                });
            }
    });
})