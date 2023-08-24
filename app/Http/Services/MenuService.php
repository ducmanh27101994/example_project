<?php


namespace App\Http\Services;


use App\Http\Repositories\MenuRepository;
use Illuminate\Support\Facades\Hash;

class MenuService
{

    protected $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;

    }


    public function create_menu($request) {

        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'menu_title' => $request->menu_title,
            'menu_router' => $request->menu_router,
            'parent_id' => $request->parent_id,
            'status' => $status,
        ];
        $menu = $this->menuRepository->create($data);
        return $menu;

    }

    public function find($id)
    {
        return $this->menuRepository->find($id);
    }

    public function update_menu($request, $id) {
        $status = (!empty($request->status) && $request->status == 'on') ? 'active' : 'block';
        $data = [
            'menu_title' => $request->menu_title,
            'menu_router' => $request->menu_router,
            'parent_id' => $request->parent_id,
            'status' => $status,
        ];
        $menu = $this->menuRepository->update($id, $data);
        return $menu;
    }


}
