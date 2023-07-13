<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class MainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
