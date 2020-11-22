<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    public $table='role_user';

    protected $fillable = [
        'role_id',
        'user_id'       
    ];
}
