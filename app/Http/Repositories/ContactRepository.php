<?php


namespace App\Http\Repositories;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactRepository extends BaseRepository
{

    public function getModel()
    {
        return Contact::class;
    }


    public function get_list($request){
        $query = DB::table('contacts');

        if (!empty($request->full_name)) {
            $query = $query->where('full_name', 'LIKE', "%$request->full_name%");
        }
        if (!empty($request->email)) {
            $query = $query->where('email', 'LIKE', "%$request->email%");
        }
        if (!empty($request->phone)) {
            $query = $query->where('phone', 'LIKE', "%$request->phone%");
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

    public function update_contact($request, $id){



    }



}
