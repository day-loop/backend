<?php

namespace App\Http\Controllers\Api\Topic;

use App\Models\Topic\TopicDayNote;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicDayNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TopicDayNote::all();

        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = TopicDayNote::create($request->validated());

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TopicDayNote $topicDayNote)
    {
        return $topicDayNote;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TopicDayNote $topicDayNote)
    {
        $topicDayNote->update($request->validated());

        return response()->json($topicDayNote);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TopicDayNote $topicDayNote)
    {
        $topicDayNote->delete();

        return response()->json(null, 204);
    }
}
