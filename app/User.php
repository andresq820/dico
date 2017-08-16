<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password'];
    
    protected $hidden = ['password','remember_token'];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
