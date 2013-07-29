<html>
 <head>
  <title>Elibom REST client - Example</title>
 </head>
 <body>
 <?php 
    require('./elibom/elibom.php');

    $elibom = new ElibomClient('your.user@domain','you api password');
    $delivery = $elibom->sendMessage('312xxxxxxx,316xxxxxxx','Text');

    echo json_encode($delivery);
 ?> 
 </body>
</html>
