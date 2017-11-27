<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="script/materialize.js" charset="utf-8"></script>
     <script src="script/control.js" charset="utf-8"></script>
     <link rel="stylesheet" href="css/materialize.css">
     <link rel="stylesheet" href="css/style.css">
  </head>
  <body>



<!--hidden content -->
<div id="naujas1" class="linkas">
<?php
require_once("include\pirmas.php");
 ?>
</div>
<div id="naujas2" class="linkas">
<?php
require_once("include\antras.php");
 ?>
</div>
<!--hidden content -->

<!--slider-->
    <div class="slider fullscreen bann">
        <ul class="slides">
          <li>
            <img src="img/ps4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              <button id="myBtn1">fadeOut 'slow' with jQuery</button> <!--button-->
            </div>
          </li>
          <li>
            <img src="img/xone.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              <button id="myBtn2">fadeOut 'slow' with jQuery</button> <!--button-->
            </div>
          </li>
          <li>
            <img src="img/wii.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              <button id="myBtn3">fadeOut 'slow' with jQuery</button> <!--button-->
            </div>
          </li>
          <li>
            <img src="img/pc.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              <button id="myBtn4">fadeOut 'slow' with jQuery</button> <!--button-->
            </div>
          </li>
        </ul>
      </div>
<!--slider-->






  </body>


</html>
