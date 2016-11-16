<?php
// PDO connect *********
error_reporting(0);
function connect() {
    	
	return new PDO('mysql:host=localhost;dbname=penguqra_dynamic_database', 'penguqra_dynamic', 'dynamic123', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';

 $sql="SELECT `title` FROM `tb_complaints` WHERE `title` LIKE (:keyword) LIMIT 0 , 30";

$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$title = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['title']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['title']).'\')">'.$title.'</li>';
}


?>