<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;

class PagesController extends Controller
{
    public function explor()
    {
        $contractor = User::select()->find(Auth::user()->id);
        $props = Property::all();
        if (!$contractor && !$props) {
            return redirect()->route('login');
        } else {
            return view('contractor.explor')->with(compact('contractor'))->with(compact('props'));
        }
    }

    public function your_project()
    {
        $contractor = User::select()->find(Auth::user()->id);
        $props = Property::all();
        if (!$contractor && !$props) {
            return redirect()->route('login');
        } else {
            return view('contractor.your_project')->with(compact('contractor'))->with(compact('props'));
        }
    }

    public function profile()
    {
        $user = User::select()->find(Auth::user()->id);
        if (!$user) {
            return redirect()->route('log_in');
        } else {
            return view('user_profile.profile', compact('user'));
        }
    }

    public function edit()
    {
        $user = User::select()->find(Auth::user()->id);
        if (!$user) {
            return redirect()->route('user.profile')->with(['error' => 'هذه اللغة غير موجوده']);
        } else {
            return view('user_profile.edit', compact('user'));
        }
    }


}
