<?php


namespace App\Http\Repositories;

use App\Models\Map;
use App\Models\Web_master_tool;
use Illuminate\Support\Facades\DB;

class MastertoolsRepository extends BaseRepository
{

    public function getModel()
    {
        return Web_master_tool::class;
    }








}
