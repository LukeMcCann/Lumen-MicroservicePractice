<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Person
 * 
 * Model Class for holding Person data. 
 */
class Campaign extends Model 
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = [
        'campaign_name', 'campaign_desc'
    ];

    /**
     * Attributes excludes from models JSON form
     */
    protected $hidden = ['id'];
}