<?php

namespace App\Http\Controllers;

use App\Http\Filters\ResourceFilters;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\Student;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourceFilters $filters, User $user)
    {
        return $this->generateCachedResponse(function () use ($filters, $user) {
            $users = $user->with([
                        'detail',
                        'student',
                        'school',
                    ])
                    ->filter($filters)
                    ->where('status', '!=', 2);

            return $this->paginateOrGet($users);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, User $user)
    {
        $request = $request->validated();
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

        return response('Created', 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userObject = $user->load([
            'detail',
            'student',
            'school',
        ]);

        return response($userObject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->status = 2;
        $user->save();

        return response($user);
    }
}
