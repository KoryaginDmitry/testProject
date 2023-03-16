<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class StateController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function list(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.states', [
            'states' => State::paginate(3)
        ]);
    }

    /**
     * @param State $state
     * @return Application|View|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function state(State $state): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.state', ['state' => $state]);
    }
}
