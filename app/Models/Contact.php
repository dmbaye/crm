<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function getName()
    {
        if ($this->first_name && $this->middle_name && $this->last_name) {
            return "{$this->first_name} {$this->middle_name} {$this->last_name}";
        }

        return "{$this->first_name} {$this->last_name}";
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
