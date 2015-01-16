<?php
$mysql = new SaeMysql();

$sql = "SELECT * FROM `note`";
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}
$mysql->closeDb();


echo $data['title'];
?>