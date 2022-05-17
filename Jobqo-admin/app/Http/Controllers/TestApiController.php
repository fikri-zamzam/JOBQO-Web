<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Response;

class TestApiController extends Controller
{
    public function getall() {
        $userApi = User::all();
        return Response::json($userApi, 201);
    }
}
