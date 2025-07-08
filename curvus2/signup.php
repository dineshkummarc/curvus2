<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start();

unset($_SESSION['id']); 


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curvus Cafe</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">

    <div id="templatemo_banner"></div>
  <style>
#menu_tab{
  width: 990px;
  height: 65px;
  float: center;
  background: url(css/images/templatemo_menu_bg.jpg) no-repeat;
}

ul.menu {
list-style-type:none; float:left; display:block; width:933px; 
}
ul.menu li {
display:inline;
font-size:12px;
font-weight:bold;
line-height:40px;
}


</style>
  <div id="menu_tab">
     
  </div>
<br>

 <?php include ('sign.php');?>

        
    
</div>
</div>

<?php include('footer.php'); ?>
</body>
</html>