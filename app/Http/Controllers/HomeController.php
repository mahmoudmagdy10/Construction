<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('log_in');
        }
        if(Auth::user()->kind === 'customer'){
            $user_customer = User::select()->find(Auth::user()->id);
            return redirect()->route('customer.homepage')->with(compact('user_customer'));
        }
        if(Auth::user()->kind === 'contractor'){
            $user_contractor = User::select()->find(Auth::user()->id);
            return redirect()->route('contractor.homepage')->with(compact('user_contractor'));
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/log_in')->with(['msg_body' => 'You signed out!']);

    }
}
