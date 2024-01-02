<?php

namespace App\Http\Controllers\Api\Loop;

use App\Models\Loop\LoopDayAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoopDayActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = LoopDayAction::all();

        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = LoopDayAction::create($request->validated());

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(LoopDayAction $loopDayAction)
    {
        return $loopDayAction;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoopDayAction $loopDayAction)
    {
        $loopDayAction->update($request->validated());

        return response()->json($loopDayAction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoopDayAction $loopDayAction)
    {
        $loopDayAction->delete();

        return response()->json(null, 204);
    }
}
