<?php


namespace App\Http\Repositories;

use App\Models\Seo;
use Illuminate\Support\Facades\DB;

class SeoRepository extends BaseRepository
{

    public function getModel()
    {
        return Seo::class;
    }








}
