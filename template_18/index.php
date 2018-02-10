
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>System Management</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway|Montserrat" rel="stylesheet"> -->
  </head>
  <link rel="stylesheet" href="./css/colors.css">
  <link rel="stylesheet" href="./css/layout.css">
  <body>
<div class="f_hold">
  <div class="f_col_12 topbar">
   <a href="#" class="logo"><i class="fa fa-home"></i></a>
   <ul>
     <li><a class="mob" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a></li>
     <li><a href="#" class="rgt" title="News"><i class="fa fa-globe"></i> Search</a></li>
     <li><a href="#" class="" title="Account Settings"><i class="fa fa-user"></i> User Management</a></li>
     <li><a href="#" class="" title="Messages"><i class="fa fa-envelope"></i> Messages</a></li>
     <li><img src="./img/avatar1.svg" class="img-circle"  alt="Avatar"></li>
     <li><a href="#" class="" title="Messages">Lira <i class="fa fa-caret-down"></i></a></li>
   </ul>
  </div>
</div>
  <div class="f_hold hf">
    <div class="f_col_2 bg-bl">
			<div class="left_menu">
		    <ul>
		      <li>
		        <a href="#" class=""><i class="fa fa-home"></i>Product</a>
		        <ul>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/dtsview" class="" title="New Product"><i class="fa fa-shopping-cart"></i>Product List</a></li>
		        </ul>
		      </li>
          <li class="active">
		        <a href="#" class=""><i class="fa fa-home"></i>Product Manage</a>
		        <ul>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/nproduct" class="" title="New Product"><i class="fa fa-xing"></i>New Product</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/addpprty" class="" title="New Product"><i class="fa fa-calendar-check-o"></i>New Property</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/proimage" class="" title="Product Images"><i class="fa fa-file-image-o"></i>Product Image</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/ordrprod" class="" title="News"><i class="fa fa-eye fa-fw"></i>Product Order</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/buyprod" class="" title="News"><i class="fa fa-globe"></i>Buy Product</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/sellprod" class="" title="News"><i class="fa fa-user"></i>Sell Product</a></li>
		        </ul>
		      </li>
          <li>
		        <a href="#" class="" title="Messages"><i class="fa fa-eercast"></i>user</a>
		        <ul>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsyspro/index" class=""><i class="fa  fa-users fa-fw"></i>Manage User</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsysuser/cuser" class=""><i class="fa fa-address-card-o"></i>New User</a></li>
		        </ul>
		      </li>
		      <li><a href="#" class=""><i class="fa fa-diamond fa-fw"></i>Orders</a></li>
		      <li><a href="#" class=""><i class="fa fa-bell fa-fw"></i>News</a></li>
		            <li><a href="#"><i class="fa fa-bank fa-fw"></i>General</a>
		        <ul>
		          <li><a href="#" class=""><i class="fa fa-history fa-fw"></i>History</a></li>
		          <li><a href="#" class=""><i class="fa fa-cog fa-fw"></i>Settings</a></li>
		          <li><a href="http://localhost/doc/smsys_web/phpapp/smsysuser/logout" class=""><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
		        </ul>
		      </li>    </ul>
		  </div>
</div>
  <div class="f_col_9 xcol">
  <div class="f_hold" ng-init='switch=0'>
  <div class="f_col_8 xcol" ng-show='switch==0' >
    <h2>Log in Form</h2>
    <form class="css-form" name="loginfm" novalidate>
      <div class="f_hold">
        <div class="f_col_12 col">
          <div ng-if="logindata.userexist==false" class="alert alert-warning">Wornig Messages</div>
          <div ng-if="logindata.userexist==true" class="alert alert-success">Success Messages</div>
        </div>
        <div class="form-group f_col_12 col">
          <label for="inputEmail4">User id</label>
          <input type="text" placeholder="User id" ng-model='userid' required>
        </div>
        <div class="form-group f_col_12 col">
          <label for="inputPassword4">Password</label>
          <input type="password" placeholder="Password" ng-model='password' ng-keypress='submitData($event)' required>
        </div>
        <div class="form-group f_col_12 col">
          <button class="btn btn-primary" ng-click="login_check()">Login</button>
          <button class="btn btn-primary" ng-click="switch=1">New User</button>
        </div>
              </div>
    </form>
  </div>
  <div class="f_col_8 xcol" ng-show='switch==1' >
    <h2>Registration Form</h2>
    <form class="css-form" name="user_regis" novalidate>
      <div class="f_hold">
        <div class="f_col_12 col">
          <div ng-if="registdata.scuss==false" class="alert alert-warning">registdata.message</div>
          <div ng-if="registdata.scuss==true" class="alert alert-success">registdata.message</div>
        </div>
        <div class="form-group f_col_12 col">
          <label for="input_name">User id <span class='field_error'>space</span>
            <span class='field_error' ng-show="user_regis.$submitted || user_regis.userid.$touched">
              <span class='field_error' ng-show="user_regis.userid.$error.required">Tell us your name.</span>
            </span></label>
          <input type="text" placeholder="User id" name='userid' ng-model='user.userid' ng-change='spaceexist(user.userid, "space")' required>
        </div>
        <div class="form-group f_col_12 col">
          <label for="input_phone">Phone <span class='field_error' ng-show='user_regis.phone.$error.required'>(Insert a phone number)</span></label>
          <input type="number" name="phone" placeholder="01687234659" ng-model='user.phone' required>
        </div>
        <div class="form-group f_col_12 col">
          <label for="inputEmail">Email <span class='field_error' ng-show='user_regis.email.$error.email'>(Insert valid email)</span></label>
          <input type="email" name="email" placeholder="emailid@gamil.com" ng-model='user.email' ng-required="string">
        </div>
        <div class="form-group f_col_12 col">
          <label for="inputPassword4">Password <sup ng-if='matchs'>(matchs)</sup></label>
          <input type="password" placeholder="Password" ng-model='user.pass' ng-change='checkMatch()' name="pass" required>
        </div>
        <div class="form-group f_col_12 col">
          <label for="inputreppass">Retype Password <span class='field_error' ng-if='notSame'>(notSame)</span></label>
          <input type="password" placeholder="Retype Password" ng-change='checkSame()' ng-model='user.repass' name="repass" required>
        </div>
        <div class="form-group f_col_12 col">
          <button class="btn btn-primary" ng-click="switch=0">Existing User</button>
          <button class="btn btn-primary" ng-click="register_user()">Register</button>
        </div>
          <!-- <span class='field_error'>user | json</span> -->
              </div>
    </form>
  </div></div>
</div>
  </div>
<div class="f_hold">
  <div class="f_col_6 col">
    Developed by @bdmeditech.
  </div>
</div>
</body>
<link rel="stylesheet" href="./css/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/design.css">
<link rel="stylesheet" href="./css/structure.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/leftmenu.css">
<link rel="stylesheet" href="./css/forms.css">
<!-- <link rel="stylesheet" href="./css/layout_ext.css"> -->
</html>
