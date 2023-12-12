<?php


namespace App\Http\Repositories;

use App\Models\Images;

class ImageRepository extends BaseRepository
{

    public function getModel()
    {
        return Images::class;
    }



}
