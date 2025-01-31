<?php
namespace Src\Core\UseCases\User\CreateUser;

use Src\Core\Entities\User;
use Src\Core\Interfaces\User\UserRepositoryInterface;
use Src\Core\UseCases\User\CreateUser\CreateUserInputDTO;
use Src\Core\UseCases\User\CreateUser\CreateUserOutputDTO;

class CreateUserUseCase
{
    public function __construct(private UserRepositoryInterface $userRepository) {}

    public function execute(CreateUserInputDTO $input): CreateUserOutputDTO
    {
        $user = new User(
            $input->fullName,
            $input->document,
            $input->email,
            bcrypt($input->password),
            $input->typeUser
        );
        $savedUser = $this->userRepository->save($user);
        return new CreateUserOutputDTO(
            $savedUser->fullName,
            $savedUser->email,
            $savedUser->typeUser
        );
    }
}
