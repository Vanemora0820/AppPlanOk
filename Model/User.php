<?php
class User {
    private $id;
    private $name;
    private $lastName;
    private $profile;

    public function __construct($id, $name, $lastName, $profile) {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->profile = $profile;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function getProfile() {
        return $this->profile;
    }
}


?>