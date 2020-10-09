<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\experienciaModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // } 

    public function home (Request $request) {

        $experiencias = experienciaModel::paginate(2000);

        $vac = compact('experiencias');

        return view("home", $vac);
    }

}
