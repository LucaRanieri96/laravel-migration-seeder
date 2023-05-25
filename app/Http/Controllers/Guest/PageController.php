<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Trains::orderBy('orario_partenza')->get();
        return view('home', compact('trains'));
    }
}
