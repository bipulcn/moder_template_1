<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/manage.js"></script>
<link rel="stylesheet" type="text/css" href="css/frame.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/body.css"/>
<link rel="stylesheet" type="text/css" href="css/rightbar.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
</head>

<body>
<div id="topbar">
  <?php require_once('./common/menus.php'); ?>
</div>
<hr class="clear" />
<div id="container">
  <div id="contents">
  	<div id="contentbody">
      <div id="leftBar">
      	<?php require_once('./common/body.php'); ?>
      </div>
      <div id="rightBar">
      	<?php require_once('./common/rightbar.php'); ?>
      </div>
      <hr class="clear" />
    </div>
    <div id="footer">
	  <?php require_once('./common/footer.php');?>
    </div>
  </div>
</div>
</body>
</html>