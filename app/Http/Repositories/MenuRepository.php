<?php


namespace App\Http\Repositories;

use App\Models\Menu;

class MenuRepository extends BaseRepository
{

    public function getModel()
    {
        return Menu::class;
    }



}
