<?php


namespace App\Http\Repositories;

use App\Models\Table_configs;

class ConfigRepository extends BaseRepository
{

    public function getModel()
    {
        return Table_configs::class;
    }



}
