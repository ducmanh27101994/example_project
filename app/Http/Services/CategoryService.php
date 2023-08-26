<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;

class CategoryService
{

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create_category($request) {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'category_title' => $request->category_title,
            'status' => $status,
            'parent_id' => $request->parent_id,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
        ];
        $result = $this->categoryRepository->create($data);
        return $result;

    }

    public function find($id)
    {
        return $this->categoryRepository->find($id);
    }

    public function update_cate($request, $id){

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'category_title' => $request->category_title,
            'status' => $status,
            'parent_id' => $request->parent_id,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
        ];
        $result = $this->categoryRepository->update($id, $data);
        return $result;

    }

}
