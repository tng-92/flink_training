<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class CourseController extends Controller
{
    //
    public function index(Request $request)
    {

        // This needs to have the filters ready to have any indexed params passed to it.
        $courses = Course::paginate($request?->pagingate ?? 10);

        return Inertia::render('Courses/page', ['data' => $courses]);
    }

    public function show(Request $request, Course $course)
    {
        return Inertia::render('Courses/Course/page', ['course' => $course->load('events')]);
    }
}
