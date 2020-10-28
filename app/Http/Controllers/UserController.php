<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|string',
        ]);

        if ($validator->fails()) {

            return $this->responseJson('error', 'Error Validate', $validator->errors(), 422);

        }

        $updatePassword = User::where('number_phone', $request->password)->update(
            array_merge($validator->validated(), ['password' => bcrypt($request->password)])
        );

        if ($updatePassword) {
            return $this->responseJson('success', 'Password Successfully Update', $updatePassword, 200);
        } else {
            return $this->responseJson('failed', 'Password Failed Update', null, 500);
        }

    }
}
