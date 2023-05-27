<?php 
/*!
  * Modal Dinamico v0.001 (https://github.com/srvictorbatista/modal_dinamico)
  * Copy 2023 see the author (https://github.com/srvictorbatista)
  * Licensed free to all users
  */
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
@session_start();
// @session_set_cookie_params(PHP_INT_MAX);
date_default_timezone_set('America/Belem');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
@header("Content-type: text/html; charset=utf-8");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", false);
@header("Pragma: no-cache");

$_ROOT = $_SERVER['DOCUMENT_ROOT'];
$THISLOCATION = explode('/',$_SERVER['SCRIPT_NAME']);
$THISFILE = $THISLOCATION[(count($THISLOCATION)-1)];
$THISPATCH = str_replace("$THISFILE","",$_SERVER['SCRIPT_NAME']);
if(!empty($_SERVER['HTTPS'])){$THISPROTOCOLO = 'https';}else{$THISPROTOCOLO = 'http';}
$THISSERVER = $THISPROTOCOLO.'://'.$_SERVER['SERVER_NAME'];
$url = "$THISSERVER$THISPATCH";
$THISPG = @$_GET['?'];
$system_host = explode('/',$url)[0].'/'.explode('/',$url)[1].'/'.explode('/',$url)[2].'/'.explode('/',$url)[3].'/';
$mobile_array = FALSE; $DISP = "PC: {$_SERVER['HTTP_USER_AGENT']}"; $user_agents = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");
foreach($user_agents as $user_agent){ if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== FALSE){ $mobile_array = TRUE; $modelo = $user_agent; break;}}


?>