<?php

namespace App\Infrastructure\Repositories;

use App\Core\Entities\User as DomainUser;
use App\Core\Interfaces\UserRepositoryInterface;
use App\Models\User as EloquentUser;

class UserRepository implements UserRepositoryInterface
{
    public function save(DomainUser $user): DomainUser
    {
        $eloquentUser = EloquentUser::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
        ]);

        return new DomainUser($eloquentUser->name, $eloquentUser->email, $eloquentUser->password);
    }
}
