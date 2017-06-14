<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MamatController extends Controller
{
 public function __construct()
 {
 	$this->middleware('auth');

 }

   public function index()
   {
   	$a= 'rahmat';
   	return $a;
   }

 }
