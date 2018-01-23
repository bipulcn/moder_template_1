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

  var functionBasedPropVal = anime({
    targets: '#functionBasedPropVal .el',
    translateX: function(el) {
      return el.getAttribute('data-x');
    },
    translateY: function(el, i) {
      return 50 + (-50 * i);
    },
    scale: function(el, i, l) {
      return (l - i) + .25;
    },
    rotate: function() { return anime.random(-360, 360); },
    duration: function() { return anime.random(1200, 1800); },
    duration: function() { return anime.random(800, 1600); },
    delay: function() { return anime.random(0, 1000); },
    direction: 'alternate',
    loop: true
  });

  var lineDrawing = anime({
    targets: '#lineDrawing .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
  });

		var svgAttributes = anime({
		  targets: '#svgAttributes polygon',
		  points: '64 128 8.574 96 8.574 32 64 0 119.426 32 119.426 96',
		  easing: 'easeInOutExpo',
      direction: 'alternate',
      loop: true
		});

}]);
