<?php


namespace App\Models;


class Users extends BaseModel
{
    protected $table = 'users';
    protected $hidden = [
        'password'
    ];


}
