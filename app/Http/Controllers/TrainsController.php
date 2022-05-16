<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    //
    public function index() {

        $trains = Train::paginate(4);
        $data = ['trains' => $trains];
       /*  $this->createNewTrain('Monte Paschio di Marghera',$value = rand(0,1) == 1); */
        return view('trains.index', $data);
    }
    public function show($id)
    {
        $train = Train::findOrFail($id);
        return view('trains.show', ['train' => $train]);
    }
}
