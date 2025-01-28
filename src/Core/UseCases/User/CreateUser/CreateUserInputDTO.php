<?php

namespace Src\Core\UseCases\User\CreateUser;

class CreateUserInputDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}
