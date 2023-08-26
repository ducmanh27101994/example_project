<?php


namespace App\Http\Repositories;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogRepository extends BaseRepository
{

    public function getModel()
    {
        return Blog::class;
    }

    public function get_list($request){
        $query = DB::table('blogs');

        if (!empty($request->news_headlines)) {
            $query = $query->where('news_headlines', 'LIKE', "%$request->news_headlines%");
        }

        if (!empty($request->status) && $request->status != -1) {
            $query = $query->where('status', '=', "$request->status");
        }

        if (!empty($request->category) && $request->category != -1) {
            $query = $query->where('category_id', '=', "$request->category");
        }

        if ($request->type_query == 'get') {
            return $query->orderBy('created_at', 'DESC')
                ->paginate(30);
        } elseif ($request->type == 'count') {
            return $query->count();
        } else {
            return $query->orderBy('created_at', 'DESC')
                ->paginate(30);;
        }

    }


}
