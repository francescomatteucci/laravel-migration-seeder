<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index() {
        $trains = Train::all();
        // dd($trains);
        return view('layouts.trains', compact('trains'));

}

}