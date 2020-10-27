<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function searchUser(Request $request)
    {
        $search = User::where($_GET['search'], 'like', '%'. $request->search .'%')->get();

        if ($search) {

            return $this->responseJson('success', 'Searching Success', $search, 200);

        } else {

            return $this->responseJson('error', 'Searching Failed', '', 500);
            
        }

    }
}
