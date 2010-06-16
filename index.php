<? include_once 'config.inc';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <? include_once 'ajax.php';?>
     <link rel="stylesheet" type="text/css" href="coming.css" />

   
    <title><? echo $title;?></title>
  </head>
  <body>
    <div id="content">
      <h1 id="title">
        <? echo $display_title;?>
      </h1>
     
      <!-- Will be replaced by notify.cgi -->
      <p id="notify">
        <div id="notifyDiv"><? echo $msg_user;?></div>
      </p>
    <div id="panel">
      <form action="/cgi/notify.cgi" method="post">
        <label for="contact_info"><? echo $callToAction;?></label>
        <input id="contact_info" name="contact_info" size="20" />
        <input type="button" value="Submit" onClick="ajaxFunction()"/>
      </form>
             <!-- End replace by notify.cgi -->
    </div>
   </div>
  </body>
</html>
