<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function random() 
    {
        $user = User::inRandomOrder()->first();

        return [
            'id' => $user->id
        ];
    }

   /*  public function httpTest() 
    {
        $response = Http::get('http://host.docker.internal:8001/api/products');

        return $response;
    } */
}
