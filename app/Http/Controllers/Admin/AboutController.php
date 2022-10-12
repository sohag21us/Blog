<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;
class AboutController extends Controller
{
  
    public function Store(Request $request){
      About::insert([
       'des' => $request->des,
       'created_at' => Carbon::now(),
      ]);
      return back();
    }

public function Create(){
   return view('Backend/pages/about/create_about');
}
}
