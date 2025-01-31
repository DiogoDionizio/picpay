<?php

namespace Src\Core\UseCases\User\CreateUser;

class CreateUserInputDTO
{
    public function __construct(
        public string $fullName,
        public string $document,
        public string $email,
        public string $password,
        public string $typeUser
    ) {}
}
