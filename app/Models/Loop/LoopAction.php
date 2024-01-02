<?php

namespace App\Models\Loop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoopAction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     */
    protected $fillable = [
        'name',
        'loop_id'
    ];

    /**
     * The attributes that should be cast
     *
     * @var array
     */
    protected $casts = [
        //
    ];
}
