<?php
    declare(strict_types = 1);

    class Customer{
        public string $id;
        public string $name;
        public string $email;
        public string $type;
        public string $address;
        public string $phone;

        public function __construct(string $id, string $name, string $email
        ,string $type, string $address ,string $phone){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->type = $type;
            $this->address= $address;
        }

        

    }
?>