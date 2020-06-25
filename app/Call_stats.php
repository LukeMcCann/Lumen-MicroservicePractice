<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Person
 * 
 * Model Class for holding Person data. 
 */
class Call_stats extends Model 
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = [
        'call_length', 'recording_url'
    ];

    /**
     * Attributes excludes from models JSON form
     */
    protected $hidden = ['id'];
}