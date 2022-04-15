<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class foodController extends Controller
{
    function index(){

        $food = User::all();
        dd($food);

    }
}
