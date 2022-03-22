<?php

namespace App\Http\Controllers;

use App\Models\Pluss;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $plussCount = Pluss::count();

        return view('stats',[
            'plussCount' => $plussCount
        ]);
    }
}
