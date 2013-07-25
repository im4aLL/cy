<?php
/*
* CodeYah
* index.php
* 15.05.2013
*
* ===========================================
* @package		1.0
* @author 		Habib Hadi <me@habibhadi.com>
* @copyright	Codeyah
* @version    	Release: 1.0 beta
* ===========================================
*/

// starting session
session_start();

// preventing direct access
define("CY", true);

// configuration file
include('config.inc.php');
include('global.inc.php');

// root function file
include('functions/core.php');

// Class files
include('class/class.query.php');

// initializing db class
$db = new db();

// connecting to DB
$db->connect($config);

// load initial data
include('init/load.php');

// load theme
include('theme/index.php');

// disconnecting from db
$db->disconnect();
?>