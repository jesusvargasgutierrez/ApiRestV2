<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    function index(Request $req){
        return view('customers.index');
    }

    function create(){
    }

    function show(Difficulty $difficulty){
    }

    function store(DifficultyRequest $req){
    }

    function update(DifficultyRequest $req, Difficulty $difficulty){
    }

    function viewcheckoutmember(Request $req){
        return view('customers.checkoutview');
    }

    
}
