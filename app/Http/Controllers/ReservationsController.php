<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Str;

class ReservationsController extends Controller
{
    function index(Request $req){
        return view('reservations.court');
    }

    function courtindex(Request $req){
        return view('reservations.court');
    }

    function createcourt(Request $req){
        return view('reservations.create_court');
    }

    function calceindex(Request $req){
        return view('reservations.calce');
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
