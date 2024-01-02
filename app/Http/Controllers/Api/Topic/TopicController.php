<?php

namespace App\Http\Controllers\Api\Topic;

use App\Models\Topic\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Topic::all();

        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = Topic::create($request->validated());

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        return $topic;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        $topic->update($request->validated());

        return response()->json($topic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();

        return response()->json(null, 204);
    }
}
