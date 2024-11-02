<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentApiController extends Controller
{
    public function index()
    {
        $students = Student::whereHas('person', function ($query) {
            $query->where('Status', 1);
        })->get();
        return response()->json($students, 200);
    }

    public function store(StoreStudentRequest  $request)
    {
        // $student = Student::create($request->validated());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) ?? Hash::make($request->username),
            // 'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));


        $user->person()->create([
            'name' => $request->name,
            'username' => $request->username,
            'birth_day' => $request->birth_day,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'address' => $request->address,
            'IsMarried' => $request->is_married,
            'status' => $request->status ?? true,
        ]);

        if ($request->hasFile('profile_picture')) {
            $profile = 'avatar' . '-' .  $user->person->id . time() . '.ٍ' .  $request->profile_picture->extension();
            $request->profile_picture->move(public_path('images/profile'), $profile);
        } else {
            $profile = 'avatar.png';
        }
        $user->person()->update([
            'profile_picture' => $profile
        ]);


        $user->person->student()->create([
            'group_id' => $request->group_id,
            'subject_id' => $request->subject_id,
        ]);
        response()->json($user->person, 200);
    }
}
