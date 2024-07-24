<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Panel\BaseController as BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index() 
    {
        $js = 'panel/js/apps/dashboard/index.js?_='.rand();
        return view('panel.dashboard.index');
    }
}
