<?php


namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{

    public function getModel()
    {
        return Product::class;
    }



}
