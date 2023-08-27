<?php


namespace App\Http\Repositories;


use App\Models\Social;
use Illuminate\Support\Facades\DB;

class SocialRepository extends BaseRepository
{

    public function getModel()
    {
        return Social::class;
    }








}
