<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;

class PagesController extends Controller
{
    public function homepage()
    {
        try{
            $contractor = User::select()->find(Auth::user()->id);
            if (!$contractor) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.homepage')->with(compact('contractor'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function explor()
    {
        try{
            $contractor = User::select()->find(Auth::user()->id);
            $props = Property::all();
            if (!$contractor && !$props) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.explor')->with(compact('contractor'))->with(compact('props'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function your_project()
    {
        try{
            $contractor = User::select()->find(Auth::user()->id);
            $props = Property::all();
            if (!$contractor && !$props) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.your_project')->with(compact('contractor'))->with(compact('props'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }
    }

    public function profile()
    {
        try{
            $user = User::select()->find(Auth::user()->id);
            if (!$user) {
                return redirect()->route('log_in');
            } else {
                return view('user_profile.profile', compact('user'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
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
