<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Helpers\ResponseFormatter;


class api_lamaran extends Controller
{
    public function submit_cv(Request $request){
        try {

            $validator = Validator::make($request->all(), [
                'users_id' => ['required', 'string', 'max:255'],
                'jobs_id' => ['required', 'string', 'max:255'],
                'resume' => ['required', 'string', 'max:255'],
            ]);

            $user = Auth::user();

            Application::create([
                'users_id' => $request->users_id,
                'jobs_id' => $request->jobs_id,
                'resume' => $request->resume
            ]);
            // false alarm
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Lamaran berhasil');
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'something went wrong',
                'error' => $error
            ], 'Aunthentication Failed', 500);
        }
    }
}
