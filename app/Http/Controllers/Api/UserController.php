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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return report(['data' => $users]);
    }

    public function update(Request $request, $id)
    {

        $users = User::find($id);
        if (!$users) {
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|mx:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'require|string|min:8|confirmed'
        ]);

        if($validator->fails()){
            throw new ValidationException($validator);
        }

        $users->name = $request->input('name');
        $users->email = $request->input('email');

        if ($request->filled('password')) {
            $users->password = bcrypt($request->input('password'));
        }

        $users->save();
        return response(['message' => 'Save succesfully']);
    }

    public function destroy($id){

        $users = User::find($id);
        if(!$users){
            return response()->json(['message' => 'User not found!']);
        }

        $users->delete();
        return response()->json(['message' => 'delete successfully']);
    }
}
