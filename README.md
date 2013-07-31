elibom-php
==========

A simple Elibom REST client.


To install:

pear install https://github.com/carlossepulveda/elibom-php/raw/master/download/ElibomClient-0.0.1.tgz


Example : 

    <html>
     <head>
      <title>Example</title>
     </head>
     <body>
     <?php 
        require('elibom/elibom.php');
    
        $elibom = new ElibomClient('your.email@domain.com','yourApiToken');
        $delivery = $elibom->sendMessage('3xxXXXxxXX','Some message');
    
        echo json_encode($delivery);
     ?> 
     </body>
    </html>

