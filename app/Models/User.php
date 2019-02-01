<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function friendlyName()
    {
        $time = Carbon::now()->toTimeString();
        $name = explode(' ', $this->name)[0];
        $day = '18:00:00';

        if ($time < $day) {
            return "Good Morning, {$name}";
        } else if ($time > $day) {
            return "Good Evening, {$name}";
        }
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

    public function companies()
    {
        return $this->hasMany('App\Models\Company');
    }

    public function project()
    {
        return $this->hasMany('App\Models\Project');
    }
}
