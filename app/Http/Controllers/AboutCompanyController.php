<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AboutCompanyController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function view(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.aboutCompany');
    }
}
