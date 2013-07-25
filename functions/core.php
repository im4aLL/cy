<?php
/*
* CodeYah
* core.php
* 04.06.2013
*
* ===========================================
* @package		1.0
* @author 		Habib Hadi <me@habibhadi.com>
* @copyright	Codeyah
* @version    	Release: 1.0 beta
* ===========================================
*/

function showTagMenu($tagArray,$selected='',$class=''){
	global $config;
	
	$selected = isset($selected['tag'])?$selected['tag']:NULL;
	
	$tagmenu = '<ul>';
	
	// all menu
	$tagmenu .= '<li'.(($selected=='all')?' class="'.$class.'"':'').'>';
	$tagmenu .= '<a href="'.$config['global']['baseurl'].'tags/all/">';
	$tagmenu .= 'All';
	$tagmenu .= '</a>';
	$tagmenu .= '</li>';
	
	// loop starts here
	if(count($tagArray)>0){
		foreach($tagArray as $tags){
			$tagmenu .= '<li'.(($selected==$tags->name)?' class="'.$class.'"':'').'>';
			$tagmenu .= '<a href="'.$config['global']['baseurl'].'tags/'.$tags->name.'/">';
			$menuName = str_replace('-', ' ', $tags->name);
			$tagmenu .= $menuName;
			$tagmenu .= '</a>';
			$tagmenu .= '</li>';	
		}
	}
	
	$tagmenu .= '</ul>';
	return $tagmenu;
}

// alpha numeric
function urlString($string){
	return preg_replace("/[^a-zA-Z0-9/_]+/", "", $string);
}
?>