<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;
use Carbon\Carbon;
class PrivacyController extends Controller
{
    public function Create(){

      return view('Backend/pages/privacy/create_privacy');
    }

    public function Store(Request $request){
        $request->validate([
            'name' => 'required',
       ]);
       Privacy::insert([
        'name' => $request->name,
        'created_at' => Carbon::now(),
       ]);

       $notification=array(
        'message'=>'Privacy Added Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
}
