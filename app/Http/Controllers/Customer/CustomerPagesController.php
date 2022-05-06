<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Models\project;
use App\Models\Comment;
use App\Models\Reply;
use DB;
use Carbon\Carbon;


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
        $id =Auth::user()->id;
        try{
            $customer = User::find($id);
            $project = Project::all()->where('user_id', '=', $id);


            if (!$customer && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('customer.your_project')->with(compact('customer','project'));
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

    public function details($id)
    {
        $user = Auth::user();
        $users = User::find($user->id);
        $props = Property::all()->where('project_id', '=', $id);
        $project = Project::all()->where('id', '=', $id);        
        $comments = Comment::where('project_id',$id)->with(['users','replies'])->get();
        $project_id = $id;
        $user = Comment::where('user_id',$user->id)->with(['users'])->get();

        $num_of_comments = Comment::where('user_id',"=",Auth::user()->id)->get();
        
        if (!$users && !$props && !$project && !$comments_of_users && !$replies_of_users) {
            return redirect()->back();
        } else {
            return view('customer.details')->with(compact('users','props','project','comments','project_id','num_of_comments'));
        }



    }

}
