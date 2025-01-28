<?php
namespace Src\Core\Entities;
class User
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}
