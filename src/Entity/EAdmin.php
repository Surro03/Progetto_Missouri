<?php

namespace src\Entity;

class EAdmin extends EUser {
    
    private string $id;

    public function __construct(string $id, string $email, string $password) {
        parent::__construct($email, $password);

    }
}
?>