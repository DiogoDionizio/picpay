<?php
namespace App\Core\Interfaces;
use App\Core\Entities\User;
interface UserRepositoryInterface
{
    public function save(User $user): User;
}
