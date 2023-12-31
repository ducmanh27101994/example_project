<?php


namespace App\Http\Services;

use Illuminate\Http\UploadedFile;


class UploadService
{
    public function upload($request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '-' . hash('SHA256', uniqid()) . '.' . $extension;
            $path = $file->storeAs('uploads', $fileName, 'public');
            $url = env('BASE_URL') . 'storage/' . $path;
        } else {
            $url = '';
        }
        return $url;
    }

    public function validate_upload($request)
    {
        $message = [];
        $file = $request->file;
        if (empty($file)) {
            $message[] = __('validate.file_not_null');
        }

        if (!empty($file) && $file->getSize() > 15000000) {
            $message[] = 'Kích thước quá lớn';
        }

        $acceptFormat = ["jpeg", "png", "jpg", "svg", 'mp3', 'mp4'];
        if (!empty($file) && !in_array($file->getClientOriginalExtension(), $acceptFormat)) {
            $message[] = 'Định dạng không cho phép';
        }

        return $message;
    }

    public function upload_param($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '-' . hash('SHA256', uniqid()) . '.' . $extension;
        $path = $file->storeAs('uploads', $fileName, 'public');

        $url = env('BASE_URL') . 'storage/' . $path;
        return $url;
    }
}
