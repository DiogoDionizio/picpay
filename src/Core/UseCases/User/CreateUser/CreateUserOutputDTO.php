<?php

namespace Src\Core\UseCases\User\CreateUser;

class CreateUserOutputDTO
{
    public function __construct(
        public string $fullName,
        public string $email,
        public string $typeUser
    ) {}
}
