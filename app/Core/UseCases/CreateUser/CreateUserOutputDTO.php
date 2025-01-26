<?php

namespace App\Core\UseCases\CreateUser;

class CreateUserOutputDTO
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}
