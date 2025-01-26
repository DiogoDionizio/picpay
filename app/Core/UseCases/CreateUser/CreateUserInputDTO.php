<?php

namespace App\Core\UseCases\CreateUser;

class CreateUserInputDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}
