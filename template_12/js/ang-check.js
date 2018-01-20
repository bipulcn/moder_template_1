var app = angular.module('tmpApp', ['ngCookies']);

app.controller('tmpController', ['$scope', '$cookies', '$cookieStore', '$http', function($scope, $cookies, $cookieStore,$http){
  $scope.submenu = [];
  $scope.submenu[0] = false;
  $cookies.userName = 'Sandeep';
  $scope.platformCookie = $cookies.userName;
  // $cookieStore.put('fruit', 'Apple');
  // $cookieStore.put('flower', 'Rose');
  $scope.myFruit = $cookieStore.get('fruit');
  console.log("hello world "+$scope.myFruit);


  var photo = document.getElementById("test"); //or use jQuery's $("#photo")
  TweenLite.to(photo, 1, {width:100, ease:Power2.easeOut});


	var spd = 2000;
	var bouncingBall = anime({
	    targets: '.ball',
	    translateY: '50vh',
      backgroundColor: [
        {value: '#FFF'}, // Or #FFFFFF
        {value: 'rgb(255, 0, 0)'},
        {value: 'hsl(100, 60%, 60%)'}
      ],
	    duration: spd,
	    loop: true,
	    direction: 'alternate',
	    easing: 'easeInCubic',
	    scaleX: {
	        value: 1.05,
	        duration: spd*0.5,
	        delay: spd*0.5
	    }
	});
}]);
