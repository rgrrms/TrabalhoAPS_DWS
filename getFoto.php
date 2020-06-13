<?php

include_once "clsConexao.php";

$PicNum = $_GET["PicNum"];

$result="SELECT * FROM produtos WHERE id=$PicNum";
$row=$result;
Header( "Content-type: image/gif");
echo $row->foto;
?>