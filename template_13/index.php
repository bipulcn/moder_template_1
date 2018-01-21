<!DOCTYPE html>
<html ng-app='tmpApp'>
<head>
	<title>Template DEsign</title>
	<link rel="stylesheet" type="text/css" href="./css/colors.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<!-- <link rel="stylesheet" type="text/css" href="./css/layout_ext.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/menus.css">
	<link rel="stylesheet" type="text/css" href="./css/animate.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/ang-check.js"></script>
</head>
<body ng-controller='tmpController'>
  <div class="f_hold">
    <div class="f_col_2 left_menu" ng-class='{hideit: enable}'>
			<img src="./img/journalist.svg" class="img-circle" style="width:50%; margin: 5% 25%; " alt="Avatar">
	    <ul>
	      <li>
		      <a ng-class="{active:submenu[0]}" href="#" class="" ng-click="submenu[0]=!submenu[0]; myclass[0]='fadeIn'"><i class="fa fa-home"></i> Product</a>
	        <ul ng-show='submenu[0]' class="animated" ng-class='myclass[0]'>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-shopping-cart"></i> Product List</a></li>
	        </ul>
	      </li>
	            <li>
	        <a href="#" ng-class="{active:submenu[1]}" ng-click="submenu[1]=!submenu[1]; myclass[1]='fadeIn'"><i class="fa fa-home"></i> Product Manage</a>
	        <ul ng-show='submenu[1]' class="animated" ng-class='myclass[1]'>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-xing"></i> New Product</a></li>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-calendar-check-o"></i> New Property</a></li>
	          <li><a href="#" class="" title="Product Images"><i class="fa fa-file-image-o"></i> Product Image</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-eye fa-fw"></i> Product Order</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-globe"></i> Buy Product</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-user"></i> Sell Product</a></li>
	        </ul>
	      </li>
				<li>
	        <a href="#" ng-class="{active:submenu[2]}" ng-click="submenu[2]=!submenu[2]; myclass[2]='fadeIn'"><i class="fa fa-eercast"></i> user</a>
	        <ul ng-show='submenu[2]' class="animated" ng-class='myclass[2]'>
						<li><a href="#" class=""><i class="fa  fa-users fa-fw"></i> Manage User</a></li>
	          <li><a href="#" class=""><i class="fa fa-address-card-o"></i> New User</a></li>
					</ul>
	      </li>
	      <li><a href="#" class=""><i class="fa fa-diamond fa-fw"></i> Orders</a></li>
	      <li><a href="#" class=""><i class="fa fa-bell fa-fw"></i> News</a></li>
				<li><a href="#" ng-class="{active:submenu[3]}" ng-click="submenu[3]=!submenu[3]; myclass[3]='fadeIn'"><i class="fa fa-bank fa-fw"></i> General</a>
	        <ul ng-show='submenu[3]' class="animated" ng-class='myclass[3]'>
	          <li><a href="#" class=""><i class="fa fa-history fa-fw"></i> History</a></li>
	          <li><a href="#" class=""><i class="fa fa-cog fa-fw"></i> Settings</a></li>
	          <li><a href="#" class=""><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
	        </ul>
	      </li>
			</ul>
		</div>
    <!--   proview_page   -->

		<div class="f_col_10">
			<div class="f_hold">
				<div class="f_col_12 topbar" ng-class='{fulllen:enable}'>
					<a class="flft" ng-click='enable=!enable'><i class="fa fa-caret-left" ng-show='!enable'></i><i class="fa fa-caret-right" ng-show='enable'></i> </a>
					<a href="#" class="flft"><img src="./img/lion_1x.jpg" class="logo img-circle" style=""></a>
					<a href="#" class="frgt" title="My Account"><img src="./img/croupier.svg" class="img-circle avat-sml" alt="Avatar"></a>
					<a href="#" class="frgt" title="News"><i class="fa fa-globe"></i> </a>
					<a href="#" class="frgt" title="Account Settings"><i class="fa fa-user"></i> </a>
					<a href="#" class="frgt" title="Messages"><i class="fa fa-envelope"></i> </a>
				</div>

				<div class="f_col_12 content hf">
			  	<h2>Product List</h2>
				  <div class="f_hold pro_style">
				    <div class="f_col_4 col">
				      <h5 >CK-shirt</h5>
				      <i >shirt</i>
				      <b >CK</b>
				      Price: <b >1200</b>Tk.
							<img class='image fltr' src="./img/image1.jpg">
				    </div>
				    <div class="f_col_4 col">
				      <img class='image fltr' src="./img/image1.jpg">
				    </div>
				    <div class="f_col_4 col">
				      <img class='image fltr' src="./img/image1.jpg">
				    </div>
						<div class="f_col_4 col">
							<div ng-class='testAnime' class="animated">
								This is another test
							</div>
							<button type="button" ng-click="testAnime='bounce'" name="button">Jump</button>
							<button type="button" ng-click="testAnime='flipInX'" name="button">Flip In</button>
						</div>
				  </div>
				</div>
				<div class="f_col_12 col footer">
					Developed by @bdmeditech.
				</div>
			</div>
		</div>
	</div>
</body>
</html>
