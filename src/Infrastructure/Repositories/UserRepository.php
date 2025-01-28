<?php

namespace Src\Infrastructure\Repositories;

use Src\Core\Entities\User as DomainUser;
use Src\Core\Interfaces\User\UserRepositoryInterface;
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
