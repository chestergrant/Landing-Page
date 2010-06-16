<?
//Database Particulars
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = 'root';
$database_name = 'coming';
$connection = mysql_connect("$dbhost","$dbusername","$dbpassword") or die("Couldn't connect to server.");
$db = mysql_select_db("$database_name" , $connection) or die("Couldn't select database.");

//Enter the apps name
$title = "Timeline-X";

//Enter the title you want to be displayed
$display_title = "Timeline-<span>X</span>";
//Enter some a message to give a reason to users for signing up
$msg_user="Get notified when it's ready!";

//Enter the type of data you will like to collect
$callToAction="Your email";

//Enter a Thank you Message
$thanks ="Thanks!!! We will let you know when we are done!";
//Enter the URL of the site
$url ="localhost";
?>