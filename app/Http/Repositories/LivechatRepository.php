<?php


namespace App\Http\Repositories;

use App\Models\Livechat;
use Illuminate\Support\Facades\DB;

class LivechatRepository extends BaseRepository
{

    public function getModel()
    {
        return Livechat::class;
    }








}
