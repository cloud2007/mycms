<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>TcitCms Menu</title>
        <link type="text/css" href="/Static/style/base.css" rel="stylesheet" />
        <script type="text/javascript" src="/Static/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="/Static/js/leftmenu.js"></script>
        <style>
            div {
                padding:0px;
                margin:0px;
            }
            body {
                padding:0px;
                margin:auto;
                text-align:center;
                background-color:#eff5ed;
                background:url(/Static/images/leftmenu_bg.gif);
                padding-left:3px;
                overflow:scroll;
                overflow-x:hidden;
                scrollbar-face-color: #eff8e6;
                scrollbar-shadow-color: #edf2e3;
                scrollbar-highlight-color: #ffffff;
                scrollbar-3dlight-color: #F2F2F2;
                scrollbar-darkshadow-color: #bdbcbd;
                scrollbar-arrow-color: #bdbcbd
            }
            dl.bitem {
                clear:both;
                width:140px;
                margin:0px 0px 5px 12px;
                background:url(/Static/images/menunewbg.gif) repeat-x;
            }
            dl.bitem2 {
                clear:both;
                width:140px;
                margin:0px 0px 5px 12px;
                background:url(/Static/images/menunewbg2.gif) repeat-x;
            }
            dl.bitem dt, dl.bitem2 dt {
                height:25px;
                line-height:25px;
                padding-left:35px;
                cursor:pointer;
            }
            dl.bitem dt b, dl.bitem2 dt b {
                color:#4D6C2F;
            }
            dl.bitem dd, dl.bitem2 dd {
                padding:3px 3px 3px 3px;
                background-color:#fff;
            }
            div.items {
                clear:both;
                padding:0px;
                height:0px;
            }
            .fllct {
                float:left;
                width:85px;
            }
            .flrct {
                padding-top:3px;
                float:left;
            }
            .sitemu li {
                padding:0px 0px 0px 18px;
                line-height:22px;
                background:url(/Static/images/arr4.gif) no-repeat 5px 9px;
            }
            ul {
                padding-top:3px;
            }
            li {
                height:22px;
            }
            a.mmac div {
                background:url(/Static/images/leftbg2.gif) no-repeat;
                height:37px!important;
                height:47px;
                padding:6px 4px 4px 10px;
                word-wrap: break-word;
                word-break : break-all;
                font-weight:bold;
                color:#325304;
            }
            a.mm div {
                background:url(/Static/images/leftmbg1.gif) no-repeat;
                height:37px!important;
                height:47px;
                padding:6px 4px 4px 10px;
                word-wrap: break-word;
                word-break : break-all;
                font-weight:bold;
                color:#475645;
                cursor:pointer;
            }
            a.mm:hover div {
                background:url(/Static/images/leftbg2.gif) no-repeat;
                color:#4F7632;
            }
            .mmf {
                height:1px;
                padding:5px 7px 5px 7px;
            }
            #mainct {
                padding-top:8px;
                background: url(/Static/images/idnbg1.gif) repeat-y;
            }
        </style>
        <base target="main" />
    </head>
    <body target="main" onLoad="CheckOpenMenu();">
        <table width="180" align="left" border='0' cellspacing='0' cellpadding='0'>
            <tr>
                <td valign='top' width='15'></td>
                <td width='160' id='mainct' valign="top">
                    <?php
                    foreach ($MenuList as $key => $val) {
                        ?>
                        <dl class='bitem2' id="sunitems<?php echo $key; ?>">
                            <dt onClick='showHide("items<?php echo $key; ?>")'><b><?php echo $val['lmName']; ?></b></dt>
                            <dd style='display:none' class='sitem' id='items<?php echo $key; ?>'>
                                <ul class='sitemu'>
                                    <?php foreach ($val['son'] as $v) { ?>
                                        <li><a href="/admin.php/<?php echo $v->doLink; ?>?col=<?php echo $v->id; ?><?php $v->dataBase ? '&dat=' . $v->dataBase : '' ?>" target="main"><?php echo $v->menuName; ?></a><?php if ($v->adminLink) { ?> | <a href="/admin.php/<?php echo $v->adminLink; ?>?col=<?php echo $v->id; ?><?php $v->dataBase ? '&dat=' . $v->dataBase : '' ?>" target="main">管理</a><?php } ?></li>
                                    <?php } ?>
                                </ul>
                            </dd>
                        </dl>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td width='160' valign='top'><img src='/Static/images/idnbgfoot.gif' /></td>
            </tr>
        </table>
    </body>
</html>
