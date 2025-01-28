<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Core\UseCases\User\CreateUser\CreateUserUseCase;
use Src\Core\UseCases\User\CreateUser\CreateUserInputDTO;

class UserController extends Controller
{
    public function __construct(private CreateUserUseCase $createUserUseCase) {}

    public function store(Request $request)
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
