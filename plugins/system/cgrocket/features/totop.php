<?php/*---------------------------------------------------------------# Package - Joomla Template based on CGrocket Framework   # ---------------------------------------------------------------# Author - CGrocket http://www.cgrocket.com# Copyright (C) 2011 - 2012 Cgrocket.com. All Rights Reserved.# license - PHP files are licensed under  GNU/GPL V2# Websites: http://www.cgrocket.com - http://www.leweb2.com-----------------------------------------------------------------*///no direct acceesdefined ('_JEXEC') or die ('resticted aceess');?><?php if($this->getParam('showtop')) { ?>	<a id="topofpage" href="#" rel="nofollow"><?php echo JText::_('GOTO_TOP') ?></a>	<?php $this->addJS('totop.js'); ?><?php } ?>