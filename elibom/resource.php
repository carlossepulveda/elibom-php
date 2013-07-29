<?php

    class Resource {

        private $user;
        private $token;

        public function __construct($u, $t) {
            $this->user = $u;
            $this->token = $t;
        }

        public function getUser() {
            return $this->user;
        }

        public function getToken() {
            return $this->token;
        }
    }
?>