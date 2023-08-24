<?php


namespace App\Models;


class Menu extends BaseModels
{
    protected $table = 'table_menu';

    public function chils() {
        return $this->hasMany(Menu::class, 'parent_id','id');
    }
}
