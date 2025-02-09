<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    //
    public function index(Request $request)
    {

        $courses = Course::when()->paginate($request?->pagingate ?? 10);

        return Inertia::render('Courses/page', ['courses' => $courses]);
    }
}
