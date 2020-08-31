<?php
include_once 'Metier.php';		// ifndef 
session_start();
$sessionCName = 'listeTODO';

if (!isset($_SESSION[$sessionCName]))
    $_SESSION[$sessionCName] = new TODOList();
$todoList = &$_SESSION[$sessionCName];
// &:Mnshen l te3dil ysir 3l list l asesiye msh bs 3l variable todoList, mtl fkrt l & bl c
?>