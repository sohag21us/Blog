<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function index(){
      return view('Backend.pages.dashbord');
    }
    public function changePass(){
      return view('Backend/pages/password/changepassword');
    }

    public function changePassStore(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $newpass = $request->new_password;
        $confirmpass = $request->password_confirmation;

       if (Hash::check($current_password,$db_pass)) {
          if ($newpass === $confirmpass) {
              User::findOrFail(Auth::id())->update([
                'password' => Hash::make($newpass)
              ]);

              Auth::logout();
              $notification=array(
                'message'=>'Your Password Change Success. Now Login With New Password',
                'alert-type'=>'success'
            );
            return Redirect()->route('login')->with($notification);

          }else {

            $notification=array(
                'message'=>'New Password And Confirm Password Not Same',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
          }
       }else {
        $notification=array(
            'message'=>'Old Password Not Match',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
       }
     }
     // =============================== profile =============================
          public function profile(){
              $user=   auth()->user();
              return view('Backend/pages/password/profile',compact('user'));
          }

          ////////// updated personal info
          public function updateInfo(Request $request){
              $request->validate([
                  'name' => 'required',
                  'email' => 'required',
              ],[
                  'name.required' => 'input your name',
              ]);

              User::findOrFail(Auth::id())->update([
                  'name' => $request->name,
                  'email' => $request->email,
                  'updated_at' => Carbon::now(),
              ]);

              $notification=array(
                  'message'=>'Your Profile Updated',
                  'alert-type'=>'success'
              );
              return Redirect()->back()->with($notification);
          }

}
