<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adsimages;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use DB;
class AddImageController extends Controller
{
    public function Create(){
      return view('Backend/pages/adsimage/create_ads');
    }

    public function insert(Request $request){

      $Adsimages = Adsimages::create([
            'link' => $request->input('link'),
            'name' => $request->input('name'),
            'created_at' => Carbon::now(),
            ]);

            if ($request->hasFile('image')) {
                        $upload_location = 'Backend/assets/uploads/ads/';
                        $file = $request->file('image');
                        $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                        Image::make($file)->save($upload_location.$name_gen);
                        $save_url = $name_gen;
                        $Adsimages->update([
                            'image' => $save_url,
                        ]);
                    }
                    return back();
     }
public function AdsAll(){
    $Adsimages = Adsimages::all();
    return view('Backend/pages/adsimage/view_ads',compact('Adsimages'));
}
public function delete($id) {

              $add=Adsimages::find($id);
                 unlink(base_path('Public/Backend/assets/uploads/ads/'.$add->image));
                $add->delete();
                $notification=array(
                    'message'=>'Image Delate Success',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
                }

}
