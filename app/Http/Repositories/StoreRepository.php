<?php


namespace App\Http\Repositories;

use App\Models\Store;
use Illuminate\Support\Facades\DB;

class StoreRepository extends BaseRepository
{

    public function getModel()
    {
        return Store::class;
    }

    public function get_list($request){

        $query = DB::table('store');

        if (!empty($request->title_store)) {
            $query = $query->where('title_store', 'LIKE', "%$request->title_store%");
        }
        if (!empty($request->address)) {
            $query = $query->where('address', 'LIKE', "%$request->address%");
        }
        if (!empty($request->status) && $request->status != -1) {
            $query = $query->where('status', '=', "$request->status");
        }

        if ($request->type_query == 'get') {
            return $query->orderBy('created_at', 'DESC')
                ->paginate(30);
        } elseif ($request->type == 'count') {
            return $query->count();
        } else {
            return $query->orderBy('created_at', 'DESC')
                ->paginate(30);
        }

    }





}
