<?php


namespace App\Http\Repositories;

use App\Models\Map;
use Illuminate\Support\Facades\DB;

class MapRepository extends BaseRepository
{

    public function getModel()
    {
        return Map::class;
    }








}
