<?php


namespace App\Http\Services;



use App\Http\Repositories\ConfigImagesRepository;
use App\Http\Repositories\ConfigRepository;

class ConfigService
{
    protected $configRepository;
    protected $configImagesRepository;
    protected $uploadService;


    public function __construct(ConfigRepository $configRepository,
                                UploadService $uploadService,
                                ConfigImagesRepository $configImagesRepository)
    {
        $this->configRepository = $configRepository;
        $this->uploadService = $uploadService;
        $this->configImagesRepository = $configImagesRepository;
    }

    public function find($id)
    {
        return $this->configRepository->find($id);
    }

    public function update_config($request, $id) {

        $data = [
            'company_name' => $request->company_name,
            'slogan' => $request->slogan,
            'company_phone' => $request->company_phone,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
        ];
        $config = $this->configRepository->update($id, $data);
        return $config;

    }

    public function create_config($request) {
        $data = [
            'company_name' => $request->company_name,
            'slogan' => $request->slogan,
            'company_phone' => $request->company_phone,
            'company_email' => $request->company_email,
            'company_address' => $request->company_address,
        ];
        $config = $this->configRepository->create($data);
        return $config;
    }

    public function findConfigImages($id){
        return $this->configImagesRepository->find($id);
    }

    public function create_config_images($request) {
        if ($request->banner_images) {
            $banner_images = $this->uploadService->upload_param($request->banner_images);
        }
        if ($request->image_icon_right) {
            $image_icon_right = $this->uploadService->upload_param($request->image_icon_right);
        }
        if ($request->favicon_image) {
            $favicon_image = $this->uploadService->upload_param($request->favicon_image);
        }

        $data = [
            'banner_images' => $banner_images ?? '',
            'image_icon_right' => $image_icon_right ?? '',
            'favicon_image' => $favicon_image ?? '',
            'footer_content' => $request->footer_content,
        ];
        $configImages = $this->configImagesRepository->create($data);
        return $configImages;

    }

    public function update_config_images($request, $id) {

        $dataOld = $this->configImagesRepository->find($id);

        if ($request->banner_images) {
            $banner_images = $this->uploadService->upload_param($request->banner_images);
        }
        if ($request->image_icon_right) {
            $image_icon_right = $this->uploadService->upload_param($request->image_icon_right);
        }
        if ($request->favicon_image) {
            $favicon_image = $this->uploadService->upload_param($request->favicon_image);
        }
        $data = [
            'banner_images' => $banner_images ?? $dataOld->banner_images,
            'image_icon_right' => $image_icon_right ?? $dataOld->image_icon_right,
            'favicon_image' => $favicon_image ?? $dataOld->favicon_image,
            'footer_content' => $request->footer_content,
        ];
        $configImages = $this->configImagesRepository->update($id, $data);
        return $configImages;
    }


}
