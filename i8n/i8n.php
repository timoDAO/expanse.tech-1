<?php
$valid_langs = array("en", "fr", "pt");
$valid_pages = array("/index.php", "/docs.php");

if(isset($_GET['lang'])) {$_COOKIE['lang']=strtolower($_GET['lang']);setcookie("lang", strtolower($_GET['lang']));}

// If user has previously specified a language, use it, otherwise use browser default
if(isset($_COOKIE['lang'])){
	// use user specified langauge if valid, otherwise use browser setting
	if (in_array(strtolower($_COOKIE['lang']), $valid_langs)) 
		$lang=strtolower($_COOKIE['lang']);
	else
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
} else {
	// If user did not specify a language, use browser language setting
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// verify lang is valid (and prevent path hijacking attempts), if not use en default 
if (!in_array(strtolower($lang), $valid_langs)) $lang="en"; 

$page=$_SERVER['SCRIPT_NAME'];
if (!in_array(strtolower($page), $valid_pages)) $page="/index.php"; 

include_once('i8n/'.$lang.'/global.php'); 		// include site wide translated values
include_once('i8n/'.$lang.$page); 	// include page specific translated values
?>