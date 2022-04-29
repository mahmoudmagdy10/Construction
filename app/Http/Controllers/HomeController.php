<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('log_in');
        }
        if(Auth::user()->kind === 'customer'){
            return redirect()->route('customer.homepage');
        }
        if(Auth::user()->kind === 'contractor'){
            return redirect()->route('contractor.homepage');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/log_in')->with(['msg_body' => 'You signed out!']);

    }
}
