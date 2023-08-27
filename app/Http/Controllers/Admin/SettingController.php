<?php


namespace App\Http\Controllers\Admin;


use App\Http\Repositories\AnalyticsRepository;
use App\Http\Repositories\FanpageRepository;
use App\Http\Repositories\LivechatRepository;
use App\Http\Repositories\MapRepository;
use App\Http\Repositories\MastertoolsRepository;
use App\Http\Repositories\SeoRepository;
use App\Http\Repositories\SocialRepository;
use Illuminate\Http\Request;

class SettingController
{

    protected $mapRepository;
    protected $settingSeoRepository;
    protected $analyticsRepository;
    protected $fanpageRepository;
    protected $livechatRepository;
    protected $mastertoolsRepository;
    protected $socialRepository;


    public function __construct(MapRepository $mapRepository, SeoRepository $settingSeoRepository, AnalyticsRepository $analyticsRepository,
                                FanpageRepository $fanpageRepository, LivechatRepository $livechatRepository, MastertoolsRepository $mastertoolsRepository,
                                SocialRepository $socialRepository)
    {
        $this->mapRepository = $mapRepository;
        $this->settingSeoRepository = $settingSeoRepository;
        $this->analyticsRepository = $analyticsRepository;
        $this->fanpageRepository = $fanpageRepository;
        $this->livechatRepository = $livechatRepository;
        $this->mastertoolsRepository = $mastertoolsRepository;
        $this->socialRepository = $socialRepository;
    }

    public function indexMap(){
        $config = $this->mapRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'map' => '',
            ];
        }
        return view('admin.contract.map', ['config' => (object)$config]);
    }

    public function submitConfigMap(Request $request)
    {
        $data = [
            'map' => $request->txt_bando,
        ];
        if ($this->mapRepository->find(1)) {
            $config = $this->mapRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexMap');
            }
        } else {
            $config = $this->mapRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexMap');
            }
        }
    }

    public function indexSeo(){
        $config = $this->settingSeoRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'website_title_tag' => '',
                'keyword_tags' => '',
                'description_card' => '',
                'contents_of_the_robots' => '',
                'contents_of_the_sitemap' => '',
            ];
        }
        return view('admin.tichhop.seo', ['config' => (object)$config]);
    }

    public function submitConfigSeo(Request $request)
    {
        $data = [
            'website_title_tag' => $request->website_title_tag,
            'keyword_tags' => $request->keyword_tags,
            'description_card' => $request->description_card,
            'contents_of_the_robots' => $request->contents_of_the_robots,
            'contents_of_the_sitemap' => $request->contents_of_the_sitemap,
        ];
        if ($this->settingSeoRepository->find(1)) {
            $config = $this->settingSeoRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexSeo');
            }
        } else {
            $config = $this->settingSeoRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexSeo');
            }
        }
    }

    public function indexAnalytics(){
        $config = $this->analyticsRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'embed_code' => '',
                'remarketing_code' => '',
            ];
        }
        return view('admin.tichhop.analytics', ['config' => (object)$config]);
    }

    public function submitConfigAnalytics(Request $request)
    {
        $data = [
            'embed_code' => $request->embed_code,
            'remarketing_code' => $request->remarketing_code,
        ];
        if ($this->analyticsRepository->find(1)) {
            $config = $this->analyticsRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexAnalytics');
            }
        } else {
            $config = $this->analyticsRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexAnalytics');
            }
        }
    }

    public function indexFanpage(){
        $config = $this->fanpageRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'embed_code' => '',
            ];
        }
        return view('admin.tichhop.fanpage',['config' => (object)$config]);
    }

    public function submitConfigFanpage(Request $request)
    {
        $data = [
            'embed_code' => $request->embed_code,
        ];
        if ($this->fanpageRepository->find(1)) {
            $config = $this->fanpageRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexFanpage');
            }
        } else {
            $config = $this->fanpageRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexFanpage');
            }
        }
    }

    public function indexLiveChat(){
        $config = $this->livechatRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'embed_code' => '',
            ];
        }
        return view('admin.tichhop.livechat',['config' => (object)$config]);
    }

    public function submitConfigLiveChat(Request $request)
    {
        $data = [
            'embed_code' => $request->embed_code,
        ];
        if ($this->livechatRepository->find(1)) {
            $config = $this->livechatRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexLiveChat');
            }
        } else {
            $config = $this->livechatRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexLiveChat');
            }
        }
    }

    public function indexMastertools(){
        $config = $this->mastertoolsRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'embed_code' => '',
            ];
        }
        return view('admin.tichhop.mastertools',['config' => (object)$config]);
    }

    public function submitConfigMastertools(Request $request)
    {
        $data = [
            'embed_code' => $request->embed_code,
        ];
        if ($this->mastertoolsRepository->find(1)) {
            $config = $this->mastertoolsRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexMastertools');
            }
        } else {
            $config = $this->mastertoolsRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexMastertools');
            }
        }
    }

    public function indexSocial(){
        $config = $this->socialRepository->find(1);
        if (empty($config)) {
            $config = [
                'id' => 1,
                'facebook' => '',
                'google' => '',
                'twitter' => '',
                'youtube' => '',
                'intagram' => '',
                'linkedin' => '',
            ];
        }
        return view('admin.tichhop.social',['config' => (object)$config]);
    }

    public function submitConfigSocial(Request $request)
    {
        $data = [
            'facebook' => $request->facebook,
            'google' => $request->google,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'intagram' => $request->intagram,
            'linkedin' => $request->linkedin,
        ];
        if ($this->socialRepository->find(1)) {
            $config = $this->socialRepository->update(1, $data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexSocial');
            }
        } else {
            $config = $this->socialRepository->create($data);
            if ($config) {
                toastr()->success('Cập nhật thành công', 'Success');
                return redirect()->route('admin.indexSocial');
            }
        }
    }


}
