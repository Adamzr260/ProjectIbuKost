<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';
    protected $primarykey = 'id' ;

    protected $fillable = ['username', 'email', 'password'];
}
