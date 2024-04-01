<?php
/*---------------------------------------------------------------
# Package - Module CGrocket Tab by CGrocket.com 
# ---------------------------------------------------------------
# Author - CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 Cgrocket.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# Websites: http://www.cgrocket.com - http://www.leweb2.com
-----------------------------------------------------------------*/

header("Content-Type: text/css");
$uniqid = $_GET['id'];
?>
#cgrocket_tab<?php echo $uniqid ?> {border:0px solid #e5e5e5}
#cgrocket_tab<?php echo $uniqid ?> ul.tabs_container {list-style:none;margin: 0!important; padding: 0!important}
#cgrocket_tab<?php echo $uniqid ?> .tabs_buttons{background:#fff url(../images/style9/header_bg.gif) repeat-x 0 100%;border-bottom:1px solid #e5e5e5;overflow:hidden}
#cgrocket_tab<?php echo $uniqid ?> ul.tabs_container li.tab{background:none;border:0!important;border-right:1px solid #e5e5e5!important;color:#666;float:left;padding:0;margin:0}
#cgrocket_tab<?php echo $uniqid ?> ul.tabs_container li.tab span{display:inline-block;cursor:pointer;padding:0 10px;margin:0 1px 0 0}
#cgrocket_tab<?php echo $uniqid ?> ul.tabs_container li.tab, #cgrocket_tab<?php echo $uniqid ?> ul.tabs_container li.tab span{font-size:12px}
#cgrocket_tab<?php echo $uniqid ?> .items_mask {position:relative;overflow:hidden}

#cgrocket_tab<?php echo $uniqid ?> ul.tabs_container li.tab.active span {background:#fff url(../images/style9/tab_active.gif) repeat-x 0 0;}

#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_red ul.tabs_container li.tab.tab_over,
#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_red ul.tabs_container li.tab.active{color:#ba0202}

#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_green ul.tabs_container li.tab.tab_over,
#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_green ul.tabs_container li.tab.active{color:#91ba02}

#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_blue ul.tabs_container li.tab.tab_over,
#cgrocket_tab<?php echo $uniqid ?>.cgrocket_tab_blue ul.tabs_container li.tab.active{color:#01b0e2}