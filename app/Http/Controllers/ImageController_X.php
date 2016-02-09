<?php

namespace App\Http\Controllers;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    protected $photo;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->photo = $imageRepository;
    }

    public function getUpload()
    {
        return view('admin.pages.upload');
    }

    public function postUpload()
    {
        $image = Input::all();
        $response = $this->photo->upload($image);
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }
}