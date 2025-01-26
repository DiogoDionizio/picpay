<?php
namespace App\Core\UseCases\CreateUser;

use App\Core\Entities\User;
use App\Core\Interfaces\UserRepositoryInterface;
use App\Core\UseCases\CreateUser\CreateUserInputDTO;
use App\Core\UseCases\CreateUser\CreateUserOutputDTO;

class CreateUserUseCase
{
    public function __construct(private UserRepositoryInterface $userRepository) {}

    public function execute(CreateUserInputDTO $input): CreateUserOutputDTO
    {
        $user = new User($input->name, $input->email, bcrypt($input->password));
        $savedUser = $this->userRepository->save($user);
        return new CreateUserOutputDTO($savedUser->name, $savedUser->email);
    }
}
