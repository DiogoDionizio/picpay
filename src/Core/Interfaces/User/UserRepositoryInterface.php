<?php
namespace Src\Core\Interfaces\User;

use Src\Core\Entities\User;

interface UserRepositoryInterface
{
    public function save(User $user): User;
}
