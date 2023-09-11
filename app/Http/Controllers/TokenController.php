<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function generateRandomToken()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz123456789'; // Define the allowed characters
        $length = 6; // Define the length of the token

        $token = Str::random($length);

        return view('welcome', ['token' => $token]);
    }
}
