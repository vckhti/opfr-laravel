<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Models\UsersModel;
use Illuminate\Http\Request;

use Validator;
class UsersController extends Controller
{
    public function users() {
        return response()->json(UsersModel::get(),200);
    }

    public function usersById($id) {
        $user = UsersModel::find($id);
        if (is_null($user)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }

        return response()->json($user,200);
    }

    public function userSave(Request $req) {
        $rules = [
            'email' => 'regex:/^.+@.+$/i',
            'password' => 'required|min:3'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $user = UsersModel::create($req->all());
        return response()->json($user,201);
    }
    //
}
