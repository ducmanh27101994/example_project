<?php


namespace App\Http\Services;


use App\Http\Repositories\BlogRepository;
use Illuminate\Support\Str;

class BlogService
{
    protected $blogRepository;
    protected $uploadService;

    public function __construct(BlogRepository $blogRepository,  UploadService $uploadService)
    {
        $this->blogRepository = $blogRepository;
        $this->uploadService = $uploadService;
    }

    public function create_blog($request)
    {

        if ($request->representative_image) {
            $representative_image = $this->uploadService->upload_param($request->representative_image);
        }

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';

        $slug = Str::slug($request->news_headlines);

        $data = [
            'news_headlines' => $request->news_headlines,
            'status' => $status,
            'describe' => $request->describe,
            'detail' => $request->detail,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
            'category_id' => $request->category_id,
            'representative_image' => $representative_image ?? '',
            'created_by' => session()->get('employee')['email'] ?? '',
            'slug' => $slug,
            'category_blogproduct' => $request->category_blogproduct
        ];
        $result = $this->blogRepository->create($data);
        return $result;
    }

    public function find($id)
    {
        return $this->blogRepository->find($id);
    }

    public function update_blog($request, $id)
    {

        if ($request->representative_image) {
            $representative_image = $this->uploadService->upload_param($request->representative_image);
        } else {
            $representative_image = $this->blogRepository->find($id)->representative_image;
        }
        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'news_headlines' => $request->news_headlines,
            'status' => $status,
            'describe' => $request->describe,
            'detail' => $request->detail,
            'page_title_tag' => $request->page_title_tag,
            'path' => $request->path,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
            'category_id' => $request->category_id,
            'representative_image' => $representative_image ?? '',
            'created_by' => session()->get('employee')['email'] ?? '',
            'slug' => $request->slug,
            'category_blogproduct' => $request->category_blogproduct
        ];
        $result = $this->blogRepository->update($id, $data);
        return $result;
    }

    public function get_list($request)
    {
        $blogs = $this->blogRepository->get_list($request);
        return $blogs;
    }
}
