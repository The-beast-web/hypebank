<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){

        $this->seo()->setTitle('Dashboard');

        return view('admin.index');
    }
}
