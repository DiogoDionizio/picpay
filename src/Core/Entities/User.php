<?php
namespace Src\Core\Entities;
class User
{
    const USER_COMUM = 1;
    const USER_MERCHANT = 2;
    public function __construct(
        public string $fullName,
        public string $document,
        public string $email,
        public string $password,
        public string $typeUser
    ) {}
}
