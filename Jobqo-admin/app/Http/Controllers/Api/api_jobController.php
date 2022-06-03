<?php

namespace App\Http\Controllers\Api;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;


class api_jobController extends Controller
{
    public function all(Request $request){
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name_job = $request->input('name_job');
        $desk_job = $request->input('desk_job');
        $job_requirement = $request->input('job_requirement');

        if($id) {
            $jobs = Job::with(['AsalJob','rangeGaji'])->find($id);

            if($jobs)
                return ResponseFormatter::success(
                    $jobs,
                    'Data produk berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }

        $jobs = Job::with(['AsalJob','rangeGaji']);

        if($name_job)
            $jobs->where('name', 'like', '%' . $name_job . '%');

            return ResponseFormatter::success(
                $jobs->paginate($limit),
                'Data list produk berhasil diambil'
            );
    }

    
}
