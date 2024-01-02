<?php

namespace App\Http\Controllers\Loop;

use App\Models\Loop\Loop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Loop::all();

        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = Loop::create($request->validated());

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Loop $loop)
    {
        return $loop;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loop $loop)
    {
        $loop->update($request->validated());

        return response()->json($loop);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loop $loop)
    {
        $loop->delete();

        return response()->json(null, 204);
    }
}
