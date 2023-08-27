<?php


namespace App\Http\Repositories;

use App\Models\Fanpage;
use App\Models\Map;
use Illuminate\Support\Facades\DB;

class FanpageRepository extends BaseRepository
{

    public function getModel()
    {
        return Fanpage::class;
    }








}
