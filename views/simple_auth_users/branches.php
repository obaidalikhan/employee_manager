<?php
echo $css;
echo $menu;
echo $title;
if(empty($list)){
	echo 'There is no branches for this user<br>';
}
else{
	echo $this->lib_table_manager->create_table($list);
	echo $this->menu->links($links);
	// echo $links;
}
echo anchor('simple_auth_users','Back to Users');