<!DOCTYPE html>
<html>
<head>
	<title>font awesome</title>
	<link rel="stylesheet" type="text/css" href="./css/colors.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<!-- <link rel="stylesheet" type="text/css" href="./css/layout_ext.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/menus.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
</head>
<style media="screen">
	/*html { background: url('./tmpimg/dashboard.jpg') center top no-repeat; background-size: contain;}*/
</style>
<body ng-controller='page_controller' ng-init="base_url='http://i-evoke.com/smsys/'">
  <div class="f_hold">
    <div class="f_col_2 left_menu">
		    <ul>
		      <li>
		        <a href="#" class=""><i class="fa fa-home"></i>Product</a>
		        <ul>
		          <li><a href="http://i-evoke.com/smsys/dtsview" class="" title="New Product"><i class="fa fa-shopping-cart"></i>Product List</a></li>
		        </ul>
		      </li>
		            <li>
		        <a href="#" class=""><i class="fa fa-home"></i>Product Manage</a>
		        <ul>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/nproduct" class="" title="New Product"><i class="fa fa-xing"></i>New Product</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/addpprty" class="" title="New Product"><i class="fa fa-calendar-check-o"></i>New Property</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/proimage" class="" title="Product Images"><i class="fa fa-file-image-o"></i>Product Image</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/ordrprod" class="" title="News"><i class="fa fa-eye fa-fw"></i>Product Order</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/buyprod" class="" title="News"><i class="fa fa-globe"></i>Buy Product</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsyspro/sellprod" class="" title="News"><i class="fa fa-user"></i>Sell Product</a></li>
		        </ul>
		      </li>      <li>
		        <a href="#" class="" title="Messages"><i class="fa fa-eercast"></i>user</a>
		        <ul>
		                    <li><a href="http://i-evoke.com/smsys/smsyspro/index" class=""><i class="fa  fa-users fa-fw"></i>Manage User</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsysuser/cuser" class=""><i class="fa fa-address-card-o"></i>New User</a></li>
		                  </ul>
		      </li>
		      <li><a href="#" class=""><i class="fa fa-diamond fa-fw"></i>Orders</a></li>
		      <li><a href="#" class=""><i class="fa fa-bell fa-fw"></i>News</a></li>
		            <li><a href="#"><i class="fa fa-bank fa-fw"></i>General</a>
		        <ul>
		          <li><a href="#" class=""><i class="fa fa-history fa-fw"></i>History</a></li>
		          <li><a href="#" class=""><i class="fa fa-cog fa-fw"></i>Settings</a></li>
		          <li><a href="http://i-evoke.com/smsys/smsysuser/logout" class=""><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
		        </ul>
		      </li>
				</ul>
		</div>
    <!--   proview_page   -->

		<div class="f_col_10" ng-init='pro_list_load()'>
			<div class="f_hold">
				<div class="f_col_12 topbar">
					<a class="mob" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
					<a href="#" class=""><i class="fa fa-home"></i>Logo</a>
					<a href="#" class="" title="News"><i class="fa fa-globe"></i></a>
					<a href="#" class="" title="Account Settings"><i class="fa fa-user"></i></a>
					<a href="#" class="" title="Messages"><i class="fa fa-envelope"></i></a>
					<a href="#" class="pos-right" title="My Account"><img src="http://i-evoke.com/smsys/assets/img/avatar2.svg" class="img-circle" style="height:25px;width:25px" alt="Avatar"></a>
				</div>

				<div class="f_col_12 content hf">
			  	<h2>Product List</h2>
				  <div class="f_hold pro_style">
				    <div class="f_col_4 col" ng-repeat="v in products">
				      <h5 ng-bind="v.name">CK-shirt</h5>
				      <i ng-bind="v.state">shirt</i>
				      <b ng-bind="v.company">CK</b>
				      <img ng-src="http://i-evoke.com/smsys/assets/uimg/bipul/{{selctImg[v.pid]}}">
				      <div ng-init='selctImg[v.pid]=v.imges[0].imgname'>
				        <img ng-repeat='iv in v.imges' ng-src="http://i-evoke.com/smsys/assets/uimg/bipul/{{iv.imgname}}" ng-click='selctImg[v.pid]=iv.imgname' style="width: 80px;">
				      </div>
				      Price: <b ng-bind="v.retaprice">1200</b>Tk.
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
