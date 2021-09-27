<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('secretary')){
            return view('secretarydash');
       }elseif(Auth::user()->hasRole('accountant')){
            return view('accountantdash');
        }elseif(Auth::user()->hasRole('cashier')){
            return view('cashierdash');
        }elseif(Auth::user()->hasRole('student')){
            return view('studentdash');
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
   }
   }


   
   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}