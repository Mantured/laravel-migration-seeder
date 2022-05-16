<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    //
    public function index() {

        $trains = Train::all();
        $data = ['trains' => $trains];
       /*  $this->createNewTrain('Monte Paschio di Marghera',$value = rand(0,1) == 1); */
        return view('trains.index', $data);
    }
}
