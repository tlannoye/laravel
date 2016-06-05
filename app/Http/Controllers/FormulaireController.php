<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class FormulaireController extends Controller
{
    public function edit(){
    	return View::make('formulaire');
    }
}
