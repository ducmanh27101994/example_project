<?php


namespace App\Http\Repositories;

use App\Models\Table_config_images;
use App\Models\Table_configs;

class ConfigImagesRepository extends BaseRepository
{

    public function getModel()
    {
        return Table_config_images::class;
    }



}
