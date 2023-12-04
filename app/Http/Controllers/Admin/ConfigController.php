<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Requests\FormGeneralConfig;
use App\Http\Services\ConfigService;
use App\Models\ConfigOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends BaseController
{
    protected $configService;

    public function __construct(ConfigService $configService)
    {
        $this->configService = $configService;

    }

    public function indexConfig()
    {

        $table_config = $this->configService->find(1);
        if (empty($table_config)) {
            $table_config = [
                'id' => 1,
                'company_name' => '',
                'slogan' => '',
                'company_phone' => '',
                'company_email' => '',
                'company_address' => '',
            ];
        }
        return view('admin.config.generalConfig', ['table_config' => (object)$table_config]);
    }

    public function submitConfig(FormGeneralConfig $request)
    {

        if ($this->configService->find(1)) {
            $config = $this->configService->update_config($request, 1);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.generalConfig');
            }
        } else {
            $config = $this->configService->create_config($request);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.generalConfig');
            }

        }

    }

    public function indexConfigImages() {
        $configImages = $this->configService->findConfigImages(1);
        if (empty($configImages)) {
            $configImages = [
                'id' => 1,
                'banner_images' => '',
                'image_icon_right' => '',
                'favicon_image' => '',
                'footer_content' => '',
            ];
        }
        return view('admin.config.bannerAndFooter', ['configImages' => (object)$configImages]);
    }

    public function submitConfigImages(Request $request) {

        if ($this->configService->findConfigImages(1)) {
            $config = $this->configService->update_config_images($request, 1);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.bannerAndFooter');
            }
        } else {

            $config = $this->configService->create_config_images($request);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.bannerAndFooter');
            }

        }


    }

    public function indexConfigOption() {

        $configOption = DB::table('config_option')
            ->get();

        return view('admin.option.option', compact('configOption'));
    }

    public function updateChecked(Request $request) {
        $slug = $request->input('slug');
        $status = $request->input('status');

        $configOption = ConfigOption::where('slug', $slug)->first();
        if ($configOption) {
            $configOption->status = $status;
            $configOption->save();
            return response()->json(['message' => 'Update successful'], 200);
        }
    }


}
