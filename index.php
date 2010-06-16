<? include_once 'config.inc';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <? include_once 'ajax.php';?>
    <style type="text/css">
body {
  background: #404040;
  margin:0;
  padding:0;
  color: white; 
  height: 100%;
  width: 100%;
  font-family: Arial, Verdana, sans-serif;
}

div#content {
  border-bottom: 40px solid #1e1e1e;
  background: #1a1a1a;
  width: 600px;
  margin: 80px auto 200px auto;
  padding: 20px 20px 50px 50px;
}

h1#title {
  margin: 30px 0 0 0;
  font-size: 60px;
  font-weight: normal;
}
h1#title span {
  font-weight: normal;
  color: #7bc00a
}
p#comingsoon {
  font-size: 16px;
  color: #999;
  letter-spacing: -1px;
}

p#notify {
  margin-top: 60px;
  color: #999;
}

form {
  color: #999;
}

p#inform {
  margin-top: 60px;
  color: #999;
  padding-bottom: 80px;
}

label, input {
  display: block;
  margin-top: 10px;
}


</style>
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
