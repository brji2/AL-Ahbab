<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index()
    {
        $students = Student::whereHas('person', function ($query) {
            $query->where('Status', 1);
        })->get();
        return response()->json($students, 200);
    }
}
