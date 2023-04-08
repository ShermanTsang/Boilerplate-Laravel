<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Layout\Content;

class HomeController extends Controller
{

    public function index(Content $content)
    {

        return $content
            ->header(config('admin.name'))
            ->description('')
            ->body(view('admin-index'));
    }
}
