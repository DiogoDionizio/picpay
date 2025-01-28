<?php

namespace Src\Core\UseCases\User\CreateUser;

class CreateUserOutputDTO
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}
