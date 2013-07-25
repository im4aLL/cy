<?php
/*
* CodeYah
* init/load.php
* 15.05.2013
*
* ===========================================
* @package		1.0
* @author 		Habib Hadi <me@habibhadi.com>
* @copyright	Codeyah
* @version    	Release: 1.0 beta
* ===========================================
*/

// load init
$load = array();

// tags menu
$load['tagMenuAry'] = array();
$tagMenuQArray = array( 'tbl_name' => 'tags', 'field' => array('name'), 'method' => PDO::FETCH_OBJ, 'condition' => ' WHERE is_menu = 1', 'limit' => '0,5' );
$db->select($tagMenuQArray);
$load['tagMenuAry'] = $db->result();

// get varibale 
$load['url'] = array();

// URL parsing
	//removing inner foldername
	$url = str_replace('/codeyah/','',$_SERVER['REQUEST_URI']);
	//spliting into array
	$urlParams = explode('/', $url);
	
	//getting tag
	if($urlParams[0]=='tags')
		$load['url']['tag'] = $urlParams[1];
	else
		$load['url']['project'] = $urlParams[0];
?>