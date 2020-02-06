<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{
    //
    public function index()
    {
        // $user = auth()->user();

        // if ($user->id == 1) {
        return view('ola_portfolio');
        // }
        // else{
        //     abort(404);
        // }
    }
}
