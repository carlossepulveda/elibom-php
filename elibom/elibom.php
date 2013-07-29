<?php

    require('resource.php');
    require('client.php');
    require('message.php');


    class ElibomClient extends Resource{

        public function sendMessage($t, $txt) {
            $message = new Message($this->getUser(), $this->getToken());
            $deliveryToken = $message->send($t, $txt);


            return $deliveryToken;
        }
    }

?>
