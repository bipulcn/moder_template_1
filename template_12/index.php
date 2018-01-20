<!DOCTYPE html>
<html ng-app='tmpApp'>
<head>
	<title>font awesome</title>
	<link rel="stylesheet" type="text/css" href="./css/colors.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<!-- <link rel="stylesheet" type="text/css" href="./css/layout_ext.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/menus.css">
	<link rel="stylesheet" type="text/css" href="./css/animate.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/angular-cookies.min.js"></script>
	<script type="text/javascript" src="./js/CSSPlugin.min.js"></script>
	<script type="text/javascript" src="./js/EasePack.min.js"></script>
	<script type="text/javascript" src="./js/TweenLite.min.js"></script>
	<script type="text/javascript" src="./js/ang-check.js"></script>
</head>
<style media="screen">
	/*html { background: url('./tmpimg/dashboard.jpg') center top no-repeat; background-size: contain;}*/
</style>
<body ng-controller='tmpController'>
  <div class="f_hold">
    <div class="f_col_2 left_menu" ng-class='{hideit: enable}'>
			<img src="./img/journalist.svg" class="img-circle" style="width:50%; margin: 5% 25%; " alt="Avatar">
	    <ul>
	      <li>{{enable}}
		      <a ng-class="{active:submenu[0]}" href="#" class="" ng-click="submenu[0]=!submenu[0]; myclass='flipInX'"><i class="fa fa-home"></i> Product</a>
	        <ul ng-show='submenu[0]' class="animated" ng-class='myclass'>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-shopping-cart"></i> Product List</a></li>
	        </ul>
	      </li>
	            <li>
	        <a href="#" ng-class="{active:submenu[1]}" ng-click='submenu[1]=!submenu[1]'><i class="fa fa-home"></i> Product Manage</a>
	        <ul ng-show='submenu[1]'>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-xing"></i> New Product</a></li>
	          <li><a href="#" class="" title="New Product"><i class="fa fa-calendar-check-o"></i> New Property</a></li>
	          <li><a href="#" class="" title="Product Images"><i class="fa fa-file-image-o"></i> Product Image</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-eye fa-fw"></i> Product Order</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-globe"></i> Buy Product</a></li>
	          <li><a href="#" class="" title="News"><i class="fa fa-user"></i> Sell Product</a></li>
	        </ul>
	      </li>
				<li>
	        <a href="#" ng-class="{active:submenu[2]}" ng-click='submenu[2]=!submenu[2]'><i class="fa fa-eercast"></i> user</a>
	        <ul ng-show='submenu[2]'>
						<li><a href="#" class=""><i class="fa  fa-users fa-fw"></i> Manage User</a></li>
	          <li><a href="#" class=""><i class="fa fa-address-card-o"></i> New User</a></li>
					</ul>
	      </li>
	      <li><a href="#" class=""><i class="fa fa-diamond fa-fw"></i> Orders</a></li>
	      <li><a href="#" class=""><i class="fa fa-bell fa-fw"></i> News</a></li>
				<li><a href="#" ng-class="{active:submenu[3]}" ng-click='submenu[3]=!submenu[3]'><i class="fa fa-bank fa-fw"></i> General</a>
	        <ul ng-show='submenu[3]'>
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
				      <div class="test" id="test" ng-model='test' style="background: orange;">
								Is it testing;
				      </div>
				    </div>
						<div class="f_col_4 col">
							<div ng-class='myclass' class="animated">
								This is another test {{myclass}}
							</div>
							<button type="button" ng-click="myclass='bounce'" name="button">Clicked</button>
							<button type="button" ng-click="myclass='flipInX'" name="button">Clicked</button>
						</div>
				  </div>
				</div>
				<div class="f_col_12 col footer">
					Developed by @bdmeditech.
				</div>
			</div>
		</div>
	</div>
	</script>
</body>
</html>
