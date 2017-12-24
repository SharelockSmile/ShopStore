<!--导入JQuery库文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
<!--导入login.tpl登录文件js文件-->
<script type="text/javascript" src="{$smarty.const.Admin_JS_URL}leftMenu.js"></script>

<div id="divContainer">
    <ul id="firstU">
        {section loop=$firstMenu name=k}
            <li class="firstli">
                <span>{$firstMenu[k]["menuName"]}</span>
                <ul class="secondU">
                    {section loop=$secondMenu name=kk}
                        {if $secondMenu[kk]["parentId"]==$firstMenu[k]["menuId"]}
                            <li ><a href="{$secondMenu[kk]["link"]}" target="frameRight">{$secondMenu[kk]["menuName"]}</a></li>
                        {/if}
                    {/section}
                </ul>
            </li>
        {/section}
    </ul>
</div>

<style type="text/css">
    #firstU
    {
        margin-top: 30px;
    }
    #firstU, .secondU
    {
        list-style-type: none;
        color: #373D45;
    }
    .secondU{
        display: none;
    }
    li
    {
        margin-top: 10px;
    }
    .secondli a
    {
        text-decoration: none;
        color: #0e6578;
        height: 30px;
    }
</style>
