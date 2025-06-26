<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Str;
use App\Models\{ Option, Suboption };

class InfoController extends Controller
{
    function infocontact(Request $req){
        return view('information.contact');
    }

    function rankinglist(Request $req){
        return view('information.rankinglist');
    }

    function homeview(Request $req){
        $options = Option::where('id_status',1)->get();

        return view('information.viewhome',[
                        'options' => $options
                    ]);
    }

    function create(){
    }

    function show(Difficulty $difficulty){
    }

    function store(DifficultyRequest $req){
    }

    function update(DifficultyRequest $req, Difficulty $difficulty){
    }

    
}
