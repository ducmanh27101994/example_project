<?php


namespace App\Models;


class Users extends BaseModels
{
    protected $table = 'users';
    protected $hidden = [
        'password'
    ];


}
