//定义全部变量不用加var
oldStateId="";//记录更改之前的状态编号
formId="";//记录要更改的订单的编号
function orderDel(orderId,stateId) {
    formId=orderId;
    oldStateId=stateId;
    document.getElementById("orderId").innerText=formId;
    document.getElementById("alertInfo").style.display="block";
    var chks=document.getElementsByName("chk");
    for(var i=0;i<chks.length;i++)
    {
        if (chks[i].value==stateId)
        {
            chks[i].checked=true;
            break;
        }
    }
}

$(function () {
    $("#updateState").click(function () {
        //接收新的的订单编号
        var newStateId="";
        var chks=document.getElementsByName("chk");
        for(var i=0;i<chks.length;i++)
        { 
            if (chks[i].checked==true)
            {
                newStateId=chks[i].value;
                break;
            }
        }
        if (newStateId==oldStateId)
        {
            alert("状态没有做任何改变");
        }
        else if(newStateId==oldStateId+1)
        {
            $.ajax({
                url:"updateState.php",
                type:"post",
                dataType:"text",
                data:{
                    "newState":newStateId,
                    "orderId":formId
                },
                success:function (data) {
                    //alert(data);
                    if (data=="1")
                    {
                        alert("修改成功");
                        window.location.reload();
                    }
                    else if (data=="0")
                    {
                        alert("修改失败");
                    }
                },
                error:function (data) {
                    alert("Error");
                }
            });
        }
        else if(newStateId<oldStateId||newStateId>oldStateId+1)
        {
            alert("订单状态只能向后一个改");
        }
    });
    $("#back").click(function () {
        //$("#alertInfo").css("display", "none");
        $("#alertInfo").attr("style", "display:none;");
        //$("#alertInfo").hide();
        //document.getElementById("alertInfo").style.display="none";
        //window.location="showOrder.php"
    });
    $("#orderInfo").click(function () {
        
    });
})