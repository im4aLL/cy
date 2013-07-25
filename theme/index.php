<?php 
/*
* CodeYah
* theme/index.php
* 15.05.2013
*
* ===========================================
* @package		1.0
* @author 		Habib Hadi <me@habibhadi.com>
* @copyright	Codeyah
* @version    	Release: 1.0 beta
* ===========================================
*/
defined("CY") or die("Restriced access"); 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $config['global']['page_title']; ?> - <?php echo $config['global']['page_slug']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $config['global']['meta_description'] ?>">
<meta name="keywords" content="<?php echo $config['global']['meta_keyword'] ?>">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo $config['global']['baseurl'] ?>theme/css-js/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $config['global']['baseurl'] ?>theme/css-js/codeyah.css">
</head>

<body>
<section id="top" class="pure-g">
	<div class="pure-u-1-6 bc-blue"></div>
    <div class="pure-u-1-6 bc-purple"></div>
    <div class="pure-u-1-6 bc-green"></div>
    <div class="pure-u-1-6 bc-red"></div>
    <div class="pure-u-1-6 bc-orange"></div>
    <div class="pure-u-1-6 bc-yellow"></div>
</section>


<header class="container">
    <div class="pure-g-r">
        <h1 class="pure-u-1-4"><a href="<?php echo $config['global']['baseurl'] ?>"><?php echo $config['global']['page_title']; ?></a></h1>
        
        <div class="pure-u-3-4 hide-tablet">
            <nav class="pure-menu pure-menu-open pure-menu-horizontal">
                <?php echo showTagMenu($load['tagMenuAry'],$load['url'],'pure-menu-selected'); ?>
            </nav>
        </div>
    </div>
</header>

<section class="banner">
	<div class="pure-g-r">
    	<div class="pure-u-1 banner-wrapper">
        	<div class="hero-text">
            	<h2>Get premium HTML templates, themes</h2>
            	<h3>download for free</h3>
            	<a class="pure-button pure-button-dark pure-button-xxlarge" href="#">Start browsing now</a>
            </div>
        </div>
    </div>
</section>

<section class="container search">
	<div class="pure-g-r">
        <div class="pure-u-3-4 pure-form">
            <input id="src-input" type="text" placeholder="What you are looking for?">
        </div>
        <div class="pure-u-1-4">
            <button type="submit" class="pure-button pure-button-xlarge">Find it!</button>
        </div>
    </div>
</section>

</body>
</html>