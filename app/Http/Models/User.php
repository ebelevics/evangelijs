<?php

namespace App\Http\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;



class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'username', 
        'email', 
        'password',
        'first_name',
        'last_name',
        'location',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];



    public function getName()
    {
        if ($this->first_name && $this->last_name)
        return "$this->first_name $this->last_name";

        if ($this->first_name)
        return $this->first_name;

        return $this->username;

    }

    public function getNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }





    public function posts()
    {
        return $this->hasMany('App\Http\Models\Post', 'user_id'); //relationship Users (with user id) hasMany Post
    }

}

