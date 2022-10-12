<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
class CategoryController extends Controller
{
    public function Create(){
      return view('Backend/pages/category/create_category');
    }
    public function categoryAll(){
      $category =Category::all();
      return view('Backend/pages/category/view_category',compact('category'));
    }

    //store category
    public function categoryStore(Request $request){
        $request->validate([
            'name' => 'required',
       ]);
       Category::insert([
        'name' => $request->name,
        'slug' => strtolower(str_replace(' ','-',$request->name)),
        'created_at' => Carbon::now(),
       ]);

       $notification=array(
        'message'=>'Catetory Added Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
    //edit category
    public function edit($cat_id){
        $category = Category::findOrFail($cat_id);
        return view('Backend.pages.category.edit_category',compact('category'));
    }
    //update
 public function catUpdate(Request $request){
     $cat_id = $request->cat_id;

     Category::findOrFail($cat_id)->Update([
         'name' => $request->name,
         'slug' => strtolower(str_replace(' ','-',$request->name)),
         'created_at' => Carbon::now(),
        ]);

        $notification=array(
         'message'=>'Catetory Update Success',
         'alert-type'=>'success'
     );
     return Redirect()->route('category.all')->with($notification);
 }

 //delete Category
  public function delete($cat_id){
   $category = Category::findOrFail($cat_id);
   if ($category) {
     $category->post()->delete();
     $category->delete();
   }

       $notification=array(
       'message'=>'Category Delete Success',
       'alert-type'=>'success'
   );
   return Redirect()->back()->with($notification);
   }


}
