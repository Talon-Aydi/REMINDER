<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() 
    {
        $activities = Activity::all();
        return response()->json($activities);
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'activity_title' => 'required|max:60',
            'activity_description' => 'nullable',
            'activity_completion' => 'boolean',
            'activity_user_id' => 'required|integer'
        ]);
        
        $activity = Activity::create($validated);

        return response()->json($activity, 201);
    }
}
