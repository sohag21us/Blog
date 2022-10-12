<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Carbon\Carbon;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class SubscriberController extends Controller
{
  public function StoreSubscribe(Request $request){
// dd($request->all());
$validated = $request->validate([
        'email' => 'required',
    ]);

    $data=$request->email;
     $isExist = DB::table('subscribers')->where('email', $data)->exists();

     if($isExist){
       $notification=array(
           'message'=>'You are already subscribed our list ',
           'alert-type'=>'error'
       );
       return Redirect()->back()->with($notification);
     } else{
       Subscriber::insert([
        'email' => $request->email,
        'created_at' => Carbon::now(),
       ]);

       $notification=array(
        'message'=>'You Successfully added to our subscriber list',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
     }
  }

public function ListSubscribe(){
     $subscriber = Subscriber::all();
     return view('Backend/pages/subscribe/view_subscribe',compact('subscriber'));
}


public function generate_pdf(){
  $subscriber = Subscriber::all();
// $pdf = Pdf::loadView('Backend/pages/subscribe/view_subscribe', compact('subscriber'));
//  return $pdf->download('invoice.pdf');
// $pdf= PDF::loadView('Backend/pages/subscribe/view_subscribe',array('subscriber' => $subscriber));
// return $pdf->stream();
$pdf = PDF::loadView('Backend/pages/subscribe/download', compact('subscriber'))
        ->setPaper('a4')
        ->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('Subscriber.pdf');
}
public function download_pdf(){

}
}
