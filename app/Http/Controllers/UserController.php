<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    "id" => 1,
                    "name" => "Kavindi",
                    "email" => "kavindi@gmail.com",
                    "role" => "admin"
                ],
                [
                    "id" => 2,
                    "name" => "Nimal",
                    "email" => "nimal@gmail.com",
                    "role" => "user"
                ],
                [
                    "id" => 3,
                    "name" => "Saman",
                    "email" => "saman@gmail.com",
                    "role" => "editor"
                ],
                [
                    "id" => 4,
                    "name" => "Anjali",
                    "email" => "anjali@gmail.com",
                    "role" => "manager"
                ],
                [
                    "id" => 5,
                    "name" => "Ravi",
                    "email" => "ravi@gmail.com",
                    "role" => "user"
                ]
            ]
        ]);
    }
}
