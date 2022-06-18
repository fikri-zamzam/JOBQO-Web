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
                'companies_id' => ['required', 'string', 'max:255'],
            ]);

            $user = Auth::user();

            Application::create([
                'users_id' => $request->users_id,
                'jobs_id' => $request->jobs_id,
                'resume' => $request->resume,
                'companies_id' => $request->companies_id
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

    public function kelola_lamaran(){
        
        try {
            $lamaran = Application::where('users_id', Auth::user()->id)->get();
            $user = Auth::user();
            $data = [[]];
            foreach($lamaran as $key=>$value){
                $data[$key]['id'] = $value->id;
                $data[$key]['logo'] = $value->Data_comp->img_logo;
                $data[$key]['pekerjaan'] = $value->Data_job->name_job;
                $data[$key]['tanggal'] = $value->created_at->format('d M Y');
                $data[$key]['status'] = $value->status;
                $data[$key]['resume'] = $value->resume;
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'data' => $data
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'something went wrong',
                'error' => $error
            ], 'Aunthentication Failed', 500);
        }
    }
}
