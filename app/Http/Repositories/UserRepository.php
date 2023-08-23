<?php


namespace App\Http\Repositories;


use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return Users::class;
    }









}
