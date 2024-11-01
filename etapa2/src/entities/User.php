<?php 

namespace Src\Entities;

class User
{
    private $id;
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getId() : int {
        return $this->id;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setId(int $id) {
        $this->id = $id;
    }
}