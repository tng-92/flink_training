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
        Log::debug('Inertia Request', request()->all());

        $courses = Course::paginate($request?->pagingate ?? 10);

        if ($request?->addNew) {
            Log::debug("Add New", ["addNew" => $request]);
        }

        return Inertia::render('Courses/page', ['data' => $courses, 'addNew' => $request?->addNew]);
    }

    public function show(Request $request, Course $course)
    {


        $course->setAttribute('panel', $request?->view ?? 'details');

        if ($request?->panel === "events") {
            $course->load('events');
        }

        if ($request?->panel === "delegates") {
            $course->load('delegates');
        }

        return Inertia::render('Courses/Course/page', ['course' => $course]);
    }
}
