<?php

namespace App\Http\Controllers;

use App\Core\UseCases\CreateUser\CreateUserUseCase;
use App\Core\UseCases\CreateUser\CreateUserInputDTO;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function __construct(private CreateUserUseCase $createUserUseCase) {}

    public function store(CreateUserRequest $request)
    {
        $inputDTO = new CreateUserInputDTO(
            $request->name,
            $request->email,
            $request->password
        );

        $outputDTO = $this->createUserUseCase->execute($inputDTO);

        return response()->json($outputDTO, 201);
    }
}
