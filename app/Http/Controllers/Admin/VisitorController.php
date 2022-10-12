<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
class VisitorController extends Controller
{
    Public function AllVisitor(){
      $visitor=  Visitor::all();
     return view('Backend/pages/visitor/view_visitor',compact('visitor'));
    }
}
