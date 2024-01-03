<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Todo;
use \App\Http\Controllers\Api\Loop;
use \App\Http\Controllers\Api\Topic;

Route::prefix('')->middleware('auth:sanctum')->group(function () {
    Route::resources([
        'todos' => Todo\TodoController::class,
        'loops' => Loop\LoopController::class,
        'loop-actions' => Loop\LoopActionController::class,
        'loop-day-actions' => Loop\LoopDayActionController::class,
        'topics' => Topic\TopicController::class,
        'topic-day-notes' => Topic\TopicDayNoteController::class,
    ]);
});
