<?php

namespace App\Services;

use App\Models\Student;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function __construct()
    {

    }

    public function index($filters, User $user)
    {
        $result = $user->with([
                'detail',
                'student',
                'school',
            ])
            ->filter($filters)
            ->where('status', '!=', 2);

        return $result;
    }

    public function store($request)
    {
        try {
            DB::beginTransaction();
            $userObject = new User($request);
            $userObject->password = 'Password@123';
            $userObject->save();

            $userDetail = new UserDetail($request);
            $userDetail->user_id = $userObject->id;
            $userDetail->save();

            switch ($request['account_type']) {
                // student
                case 4:
                    $userObject->account_type = 4;
                    $student = new Student($request);
                    $student->user_id = $userObject->id;
                    $student->save();
                    break;
                default:
                    // code...
                    break; }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response($th->getMessage(), 400);
        }
    }
    public function delete(User $user)
    {
        $user->status = 2;
        $user->save();
    }
}
