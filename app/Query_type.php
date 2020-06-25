<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Person
 * 
 * Model Class for holding Person data. 
 */
class Query_type extends Model 
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = [
        'title'
    ];

    /**
     * Attributes excludes from models JSON form
     */
    protected $hidden = ['id'];
}