<?php


namespace App\Http\Repositories;


use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return Users::class;
    }

    public function get_all_employee($request)
    {
        $model = $this->model;

        return $model
            ->where('type', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(50);
    }









}
