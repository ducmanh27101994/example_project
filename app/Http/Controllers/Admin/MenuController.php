<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Requests\FormAddMenu;
use App\Http\Requests\FormGeneralConfig;
use App\Http\Services\ConfigService;
use App\Http\Services\MenuService;
use App\Models\Menu;
use Illuminate\Http\Request;
class MenuController extends BaseController
{

    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;

    }

    public function indexListMenu() {

        $menu = Menu::all();
        return view('admin.menu.main',['menu' => $menu]);
    }

    public function indexCreateMenu() {

        $menu = Menu::orderBy('id', 'ASC')->get();
        return view('admin.menu.addmenu', ['menu' => $menu]);
    }

    public function createMenu(FormAddMenu $request) {
        $menu = $this->menuService->create_menu($request);
        if ($menu) {
            toastr()->success("Tạo mới thành công", 'Success');
            return redirect()->route('admin.indexListMenu');
        }
        toastr()->error("Tạo mới thất bại", 'Fail');
        return redirect()->route('admin.indexListMenu');
    }

    public function editMenu($id) {
        $menu = Menu::orderBy('id', 'ASC')->get();
        $editMenu = $this->menuService->find($id);
        return view('admin.menu.editmenu', ['menu' => $menu, 'editMenu' => $editMenu]);
    }

    public function submitEditMenu(FormAddMenu $request, $id) {

        if (!$this->menuService->find($id)) {
            toastr()->error("Không tìm thấy menu", 'Fail');
            return redirect()->route('admin.indexListMenu');
        }
        $menu = $this->menuService->update_menu($request, $id);
        if ($menu) {
            toastr()->success('Cập nhật thành công', 'Success');
            return redirect()->route('admin.editMenu', ['id' => $id]);
        }
        toastr()->error('Cập nhật thất bại', 'Fail');
        return redirect()->route('admin.editMenu', ['id' => $id]);

    }











}
