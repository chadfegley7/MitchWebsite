<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class ArtController extends Controller
{

    public function index(){
    	return view('pages.art');
    }
}