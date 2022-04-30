<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;

class CustomerPagesController extends Controller
{
    public function homepage()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            if (!$customer) {
                return redirect()->route('log_in');
            } else {
                return view('customer.homepage')->with(compact('customer'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function explor()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            $props = Property::all();
            if (!$customer && !$props) {
                return redirect()->route('log_in');
            } else {
                return view('customer.explor')->with(compact('customer'))->with(compact('props'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function construction_style()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            if (!$customer) {
                return redirect()->route('log_in');
            } else {
                return view('customer.construction_style')->with(compact('customer'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }
    public function your_project()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            $props = Property::all();
            if (!$customer && !$props) {
                return redirect()->route('log_in');
            } else {
                return view('customer.your_project')->with(compact('customer'))->with(compact('props'));
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
