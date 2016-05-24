<?php

namespace App\Http\Controllers\Admin;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\Input;
use App\MailingList;

class MailingListController extends Controller
{
    protected $image;

    public function create()
    {
        $pageName = "Admin Newsletter";
        return view('admin/pages/mailing-list', compact('pageName'));
    }

    public function newsletter()
    {

    }

}