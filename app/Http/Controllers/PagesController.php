<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
use DB;

class PagesController extends Controller
{

  public function index(){
   $title = 'About us page reloaded';
   return view('pages.index')->with('title', $title);
  }

public function about(){
   
   return view('pages.about');
}

public function disclaimer(){
  
   return view('pages.disclaimer');
}

public function termsofuse(){
  
   return view('pages.termsofuse');
}

public function privacy(){
  
   return view('pages.privacy');
}

public function faqs(){
  
   return view('pages.faqs');
}

public function services(){

   $data = array(
      'title' => 'Services!',
      'services' => ['Web Design','Pragramming', 'SEO']
      
   );
   return view('pages.services')->with($data);;
}

}
