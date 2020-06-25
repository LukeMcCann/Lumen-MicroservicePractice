<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Person
 * 
 * Model Class for holding Person data. 
 */
class Person extends Model 
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'query_id', 'call_stats_id', 'campaign_id'
    ];

    /**
     * Attributes excludes from models JSON form
     */
    protected $hidden = ['id'];
}