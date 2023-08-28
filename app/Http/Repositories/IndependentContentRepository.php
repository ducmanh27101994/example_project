<?php


namespace App\Http\Repositories;

use App\Models\IndependentContent;

class IndependentContentRepository extends BaseRepository
{

    public function getModel()
    {
        return IndependentContent::class;
    }





}
