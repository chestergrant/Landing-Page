<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
include_once 'config.inc';
$contact_info = $_REQUEST['contact_info'];
$ip=$_SERVER['REMOTE_ADDR'];
//Validate and enter data in the box
$createDB = "CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `ip_address` VARCHAR(255),
  `contact_details` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
)
";
$sql = mysql_query($createDB);
$q = "INSERT INTO `contact_info`(created_at, ip_address, contact_details)
VALUES (now(),'".$ip."','".$contact_info."')";
$sql = mysql_query($q);

echo "<p id='notify'>".$thanks."</p>";

?>
