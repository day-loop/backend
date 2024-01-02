<?php

namespace App\Models\Topic;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        if (!app()->runningInConsole()) {
            static::creating(function ($model) {
                $model->user_id = Auth::id();
            });
        }
    }

    /**
     * The attributes that are mass assignable
     */
    protected $fillable = [
        'name',
        'user_id'
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
