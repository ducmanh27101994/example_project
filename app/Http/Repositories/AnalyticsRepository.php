<?php


namespace App\Http\Repositories;

use App\Models\Analytics;


class AnalyticsRepository extends BaseRepository
{

    public function getModel()
    {
        return Analytics::class;
    }



}
