<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class zipcode extends Controller
{

     function index(){


                 $zip_codes=\App\ZipCode::all();
         return view('zipcodes',['zipcodes'=>$zipcodes]);

     }

   