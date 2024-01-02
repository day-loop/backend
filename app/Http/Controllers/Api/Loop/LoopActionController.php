<?php

namespace App\Http\Controllers\Api\Loop;

use App\Models\Loop\LoopAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoopActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = LoopAction::all();

        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = LoopAction::create($request->validated());

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(LoopAction $loopAction)
    {
        return $loopAction;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoopAction $loopAction)
    {
        $loopAction->update($request->validated());

        return response()->json($loopAction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoopAction $loopAction)
    {
        $loopAction->delete();

        return response()->json(null, 204);
    }
}
