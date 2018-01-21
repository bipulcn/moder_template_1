<!DOCTYPE html>
<html>
<head>
	<title>Animate.css examples</title>
	<link rel="stylesheet" type="text/css" href="./css/colors.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<link rel="stylesheet" type="text/css" href="./css/layout_ext.css">
	<link rel="stylesheet" type="text/css" href="./css/animate.css">
</head>
<?php
 $str = "bounce flash pulse rubberBand shake headShake swing tada wobble jello bounceIn bounceInDown bounceInLeft bounceInRight bounceInUp bounceOut bounceOutDown bounceOutLeft bounceOutRight bounceOutUp fadeIn fadeInDown fadeInDownBig fadeInLeft fadeInLeftBig fadeInRight fadeInRightBig fadeInUp fadeInUpBig fadeOut fadeOutDown fadeOutDownBig fadeOutLeft fadeOutLeftBig fadeOutRight fadeOutRightBig fadeOutUp fadeOutUpBig flipInX flipInY flipOutX flipOutY lightSpeedIn lightSpeedOut rotateIn rotateOut rotateInDownRight rotateInUpLeft rotateInUpRight rotateInDownLeft rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge jackInTheBox rollIn rollOut zoomIn zoomInDown zoomInLeft zoomInRight zoomInUp zoomOut zoomOutDown zoomOutLeft zoomOutRight zoomOutUp slideInDown slideInLeft slideInRight slideInUp slideOutDown slideOutLeft slideOutRight slideOutUp";
 $cls = explode(" ", $str);
 ?>
 <style type="text/css">
 	.example { background: var(--c44); text-align:center; margin: 10px 0; padding: 35px 25px; }
 	.name { background: var(--c42); padding: 15px 10px; font-size: 1.2em; }
 </style>
<body>
<div class="f_hold">
	<div class="f_col_12 col">
		<h1>Animate.css examples</h1>
	</div>
	<?php foreach ($cls as $val) { ?>
		<div class="f_col_3 col">
			<?php
				echo "<div class='example animated infinite ".$val."'>Example Animation</div>";
				echo "<div class='name'>".$val."</div>";
			?>
		</div>
	<?php } ?>
	<div class="f_col_5 col">
		hi
	</div>
</div>
</body>
</html>
