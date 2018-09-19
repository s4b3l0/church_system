<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">    
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
          <link rel='stylesheet' type="text/css" href="pcss/style2.css">
    </head>
    <body>
        <div id="wrapper">
            <div id ="banner" class="screen">
                <image src ="images/logo.png" height="170px" width="205px"/>
				<div id = "churchName">New Horizon Church</div>
            </div>
	<?php include 'template/navigation.php';
      ?>
      <?php echo $content  ; ?>
            </div>
           </div>
           <script src='printjs/index.js'></script>
    </body>
</html>
