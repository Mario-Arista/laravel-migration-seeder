<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        // Dichiaro la data di oggi
        $todayDate = date('2024-04-10');

        // ottengo solo le righe con la data di partenza da oggi in poi
        $trains = Train::where('date', '>', $todayDate)->get();

        return view('home', compact('trains'));
    }
    
}
