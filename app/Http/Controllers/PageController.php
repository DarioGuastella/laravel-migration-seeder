<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function index()
    {
        // $risposta = config("data");
        $dati = [
            "treni" => Train::all()
        ];

        return view('home', $dati);
    }
}
