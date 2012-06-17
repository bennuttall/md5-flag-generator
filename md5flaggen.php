<?php

$thing = $_GET['thing'];

$md5 = md5($thing);

$col1 = substr($md5,0,6);
$col2 = substr($md5,6,6);
$col3 = substr($md5,12,6);

echo 	"<div style='float:left;width:100px;height:200px;background:#{$col1}'>&nbsp;</div>" .
	"<div style='float:left;width:100px;height:200px;background:#{$col2}'>&nbsp;</div>" .
	"<div style='float:left;width:100px;height:200px;background:#{$col3}'>&nbsp;</div>";
