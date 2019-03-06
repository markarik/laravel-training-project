<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
   
  
    return view ('Pages.index');
   }


   public function About(){

      $title = "About Us";

      return view ('Pages.abouts')->with('title',$title);
  }


  public function Services(){

   $title = "What we do";

   return view ('Pages.service')->with('title',$title);
}
}
