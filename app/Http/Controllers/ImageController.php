<?php

namespace App\Http\Controllers;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    public function getImages() {
        $imageFiles = $this->scanImages('images/photos/2017-winter-event/event/');
        $imageInfo = [];
        $images = [];

        foreach($imageFiles as $i=>$image) {
            if($i == 0 || $i == 7) {
                $imageInfo['column'] = '16';
            }
            else {
                $imageInfo['column'] = '8';
                $i = 0;
            }
            $imageInfo['file'] = $image;
            array_push($images, $imageInfo);
        }

        return view('pages.photos.test-images')->with('images', $images);
    }

    private function scanImages($dir) {
        $folder = "../public/" . $dir;
        $files = array_diff(scandir($folder), array('..', '.'));
        $images = [];

        foreach($files as $file) {
            array_push($images, $dir . $file);
        }

        return $images;
    }

//    public function __construct(ImageRepository $imageRepository)
//    {
//        $this->image = $imageRepository;
//    }
//
//    public function getUpload()
//    {
//        return view('pages.upload');
//    }
//
//    public function postUpload()
//    {
//        $photo = Input::all();
//        $response = $this->image->upload($photo);
//        return $response;
//
//    }
//
//    public function deleteUpload()
//    {
//
//        $filename = Input::get('id');
//
//        if(!$filename)
//        {
//            return 0;
//        }
//
//        $response = $this->image->delete( $filename );
//
//        return $response;
//    }
}