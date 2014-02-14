<?php
//My Delphi/Pascal-Language Functions for PHP :P
function UpperCaseFirst($s)
{
	$s = ucfirst($s);
	return $s;
}
function LowerCase($s)
{
	$s = strtolower($s);
	return $s;
}
function UpperCase($s)
{
	$s = strtoupper($s);
	return $s;
}
function UpperCaseWords($s)
{
	$s = ucwords($s);
	return $s;
}
?>