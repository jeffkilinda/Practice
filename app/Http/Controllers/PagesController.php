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
   $title = 'About us page reloaded';
   return view('pages.about')->with('title', $title);
}

public function services(){

   $data = array(
      'title' => 'Services!',
      'services' => ['Web Design','Pragramming', 'SEO']
      
   );
   return view('pages.services')->with($data);;
}

}
