<script type="text/javascript">
function ajaxFunction()
{


var xmlhttp;
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  // code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4)
  {
   document.getElementById("panel").innerHTML="&nbsp;";
   document.getElementById("notifyDiv").innerHTML=xmlhttp.responseText;
  }
}

   var contact_info=document.getElementById("contact_info").value;

  
  var url = "ajaxHandler.php";
  url = url+"?contact_info="+contact_info;
   
  document.getElementById("panel").innerHTML="<p id='notify'><Center><img src='spinner.gif'></Center></p>"


xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

</script>