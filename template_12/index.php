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

	<script type="text/javascript" src="./js/anime.min.js"></script>
	<script type="text/javascript" src="./js/ang-check.js"></script>
</head>
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
							<div id="lineDrawing"> <svg viewBox="0 0 280 100">
					      <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="1" class="lines">
					        <path d="M58 80V50.12C57.7 41.6 51.14 35 43 35a15 15 0 0 0 0 30h7.5v15H43a30 30 0 1 1 0-60c16.42 0 29.5 13.23 30 29.89V80H58z" stroke-dasharray="316.85528564453125" style="stroke-dashoffset: 316.855px;"></path>
					        <path d="M73 80V20H58v60h15z" stroke-dasharray="150" style="stroke-dashoffset: 150px;"></path>
					        <path d="M58 80V49.77C58.5 33.23 71.58 20 88 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80H58zm75 0V20h-15v60h15z" stroke-dasharray="441.1739501953125" style="stroke-dashoffset: 441.174px;"></path>
					        <path d="M118 80V49.77C118.5 33.23 131.58 20 148 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80h-15zm-7.5-60a7.5 7.5 0 1 1-7.48 8v-1c.25-3.9 3.5-7 7.48-7z" stroke-dasharray="338.3053894042969" style="stroke-dashoffset: 338.305px;"></path>
					        <path d="M133 65a15 15 0 0 1-15-15v-7.5h-15V50a30 30 0 0 0 30 30V65zm30 15V49.77C163.5 33.23 176.58 20 193 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80h-15z" stroke-dasharray="406.8699035644531" style="stroke-dashoffset: 406.87px;"></path>
					        <path d="M238 65a15 15 0 0 1 0-30c8.1 0 14.63 6.53 15 15h-15v15h30V49.89C267.5 33.23 254.42 20 238 20a30 30 0 0 0 0 60V65z" stroke-dasharray="301.8561706542969" style="stroke-dashoffset: 301.856px;"></path>
					        <path d="M260.48 65a7.5 7.5 0 1 1-7.48 8v-1c.26-3.9 3.5-7 7.48-7z" stroke-dasharray="47.128875732421875" style="stroke-dashoffset: 47.1289px;"></path>
					        <path d="M60.48 85a7.5 7.5 0 1 1-7.48 8v-1c.26-3.9 3.5-7 7.48-7z" stroke-dasharray="47.128875732421875" style="stroke-dashoffset: 47.1289px;"></path>
					      </g>
					    </svg> </div>
				    </div>
				    <div class="f_col_4 col">
							<div id="functionBasedPropVal">
							  <div class="line">
							    <div data-x="160" class="small square el"></div>
							  </div>
							  <div class="line">
							    <div data-x="80" class="small square el"></div>
							  </div>
							  <div class="line">
							    <div data-x="250" class="small square el"></div>
							  </div>
							</div>
				    </div>
				    <div class="f_col_4 col">
				      <div class="test" id="test" ng-model='test' style="background: orange;">
								Is it testing;
				      </div>
							<svg height="400" width="450">
							  <path id="lineAB" d="M 100 350 l 150 -300" stroke="orange"
							  stroke-width="1" fill="none" />
							  <path id="lineBC" d="M 250 50 l 150 300" stroke="purple"
							  stroke-width="1" fill="none" />
							  <path d="M 175 200 l 150 0" stroke="green" stroke-width="1"
							  fill="none" />
							  <path d="M 100 350 q 150 -300 300 0" stroke="blue"
							  stroke-width="1" fill="none" />
							  <!-- Mark relevant points -->
							  <g stroke="black" stroke-width="3" fill="black">
							    <circle id="pointA" cx="100" cy="350" r="3" />
							    <circle id="pointB" cx="250" cy="50" r="3" />
							    <circle id="pointC" cx="400" cy="350" r="3" />
							  </g>
							  <!-- Label the points -->
							  <g font-size="30" font-family="sans-serif" fill="black" stroke="none"
							  text-anchor="middle">
							    <text x="100" y="350" dx="-30">A</text>
							    <text x="250" y="50" dy="-10">B</text>
							    <text x="400" y="350" dx="30">C</text>
							  </g>
							</svg>
				    </div>
						<div class="f_col_4 col">
							<div ng-class='myclass' class="animated">
								This is another test {{myclass}}
							</div>
							<button type="button" ng-click="myclass='bounce'" name="button">Clicked</button>
							<button type="button" ng-click="myclass='flipInX'" name="button">Clicked</button>
							<section class="wrapper">
						    <div class="ball"></div>
							</section>
						</div>
						<div class="f_col_4 col">
							<div id="svgAttributes"> <svg width="128" height="128" viewBox="0 0 128 128">
							  <polygon points="64 68.64 8.574 100 63.446 67.68 64 4 64.554 67.68 119.426 100 " fill="currentColor"
  style="fill:orange;fill-rule:evenodd;"></polygon>
							</svg> </div>
						</div>
				  </div>
				</div>
				<div class="f_col_12 col footer">
					Developed by @bdmeditech.
				</div>
			</div>
		</div>
	</div>
	<style media="screen">
	.small { height: 30px; width: 30px; background: red; }
	.circle { border-radius: 100%; }
	.el {}
	.wrapper {
	    height: 100vh;
	    width: 100%;
	    position: relative;
	    overflow: hidden;
	}

	.ball {
	    height: 150px;
	    width: 150px;
			margin: 0 auto;
	    left: calc(50% - 100px);
	    background-color: darkblue;
	    border-radius: 50%;
			box-shadow: inset -1px 5px 20px -1px var(--w3), inset 10px -50px 100px -10px var(--b1);
	}
		/*html { background: url('./tmpimg/dashboard.jpg') center top no-repeat; background-size: contain;}*/
	</style>
</body>
</html>
