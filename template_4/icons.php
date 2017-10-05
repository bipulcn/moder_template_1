<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/colors.css">
    <link rel="stylesheet" href="./css/scaliton.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <style media="screen">
    .head { background: var(--clr22); color: var(--clr3); }
    .head h1 { font-size: 3em; margin: 30px;}
    .icons {text-align: center; color: gray; padding: 10px 0; }
    .icons h4 { font-size: 2.5em; color: black; padding: 10px 0;}
  </style>
  <body>
    <div class="container">
        <div class="column twelve head"><h1>i-cons</h1></div>
         <?php
           for ($i=1; $i <= 9999 ; $i++) {
             $r = rand()%255;
             $g = rand()%255;
             $b = rand()%255;
             $hx = dechex($i);
             ?>
             <div class="column one icons" style="background: rgba(<?php echo $r.','.$g.','.$b;?>,0.15);">
               <?php echo "<h4 style=\"color: rgba(".$r.','.$g.','.$b.",1);\">&#".$i.";</h4>&amp;#".$i."<br>".$hx;?>
             </div>
             <?php
           }
          ?>
    </div>
  </body>
</html>
