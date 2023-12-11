<?php


namespace App\Http\Repositories;

use App\Models\CateProduct;

class CateProductRepository extends BaseRepository
{

    public function getModel()
    {
        return CateProduct::class;
    }



}

