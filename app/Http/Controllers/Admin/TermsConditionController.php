<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsCondition;
use Carbon\Carbon;
class TermsConditionController extends Controller
{
  public function Create(){

    return view('Backend/pages/termscondition/create_terms');
  }

  public function Store(Request $request){
      $request->validate([
          'name' => 'required',
     ]);
     TermsCondition::insert([
      'name' => $request->name,
      'created_at' => Carbon::now(),
     ]);

     $notification=array(
      'message'=>'Terms Added Success',
      'alert-type'=>'success'
  );
  return Redirect()->back()->with($notification);
  }
}
