<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
