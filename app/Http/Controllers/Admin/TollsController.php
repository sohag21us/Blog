<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tolls;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use DB;
class TollsController extends Controller
{
  public function Create(){
    return view('Backend/pages/tools/create_post');

  }
  public function Store(Request $request){
//dd($request->all());
    $tolls = Tolls::create([
          'title' => $request->input('title'),
          'des' => $request->input('des'),
          'link' => $request->input('link'),
          'created_at' => Carbon::now(),
          ]);

          if ($request->hasFile('image')) {
              $upload_location = 'Backend/assets/uploads/tolls/';
              $file = $request->file('image');
              $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
              Image::make($file)->resize(274,275)->save($upload_location.$name_gen);
              $save_url = $name_gen;
              $tolls->update([
                  'image' => $save_url,
              ]);
        }
  }
  // All Tolls..................
  public function AllTools(){
    $tolls= Tolls::latest()->get();
    return view('Backend/pages/tools/view_tolls',compact('tolls'));
  }
  public function EditTools($tolls_id){
      $tolls = Tolls::findOrFail($tolls_id);
      return view('Backend/pages/tools/edit_tolls',compact('tolls'));
  }
  // Tolls update..................
 public function UpdateTolls(Request $request) {
              $tolls=  Tolls::find($request->tolls_id);
              $tolls->title= $request->title;
              $tolls->des= $request->des;
              $tolls->link= $request->link;
              $tolls->updated_at=Carbon::now();
              $tolls->save();
             if($request->hasFile('image')) {
               $tolls = Tolls::find($request->tolls_id);
                 unlink(base_path('Public/Backend/assets/uploads/tolls/'.$tolls ->image));
                   $fileName= $request->tolls_id.'.'.$request->image->getClientOriginalExtension();
                   Image::make($request->image)->resize(274,275)->save(base_path('Public/Backend/assets/uploads/tolls/'.$fileName));
                   DB::table('tolls')->where('id', $request->tolls_id)->update([
                         'image' => $fileName,
                       ]);

                 } else {

                 }
                 $notification=array(
                     'message'=>'Product Added Success',
                     'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);
}
        public function DeleteTolls($tolls_id) {
           $tolls=Tolls::find($tolls_id);
           unlink(base_path('Public/Backend/assets/uploads/tolls/'.$tolls->image));
            $tolls->delete();
            return back();
         }

}
