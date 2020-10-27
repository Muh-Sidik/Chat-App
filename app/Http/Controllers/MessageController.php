<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function book()
    {
        return response()->json(["message" => 'Anda login'], 200);
    }
}
