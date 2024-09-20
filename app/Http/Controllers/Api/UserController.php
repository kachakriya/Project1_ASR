<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response(['data' => $users]);
    }

    public function show($id)
    {
        $users = User::find($id);
        if (!$users) {
            return response()->json(['message' => 'User not found!']);
        }
        return response(['data' => $users]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user',
            'password' => 'required|string|min:8',
        ]);

        if($validator->fails()){
            throw new ValidationException($validator);
        }

    }
}
