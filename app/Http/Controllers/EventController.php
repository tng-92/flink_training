<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    //
    public function index(Request $request)
    {

        // This needs to have the filters ready to have any indexed params passed to it.
        $events = Event::paginate($request?->pagingate ?? 10);

        return Inertia::render('Courses/page', ['data' => $events]);
    }
}
