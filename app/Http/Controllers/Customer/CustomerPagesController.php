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
            $customer = User::select()->find($id);
            $props = Property::all()->where('user_id', '=', $id);
            $project = Project::all()->where('user_id', '=', $id);

            if (!$customer && !$props && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('customer.your_project')->with(compact('customer'))->with(compact('props'))->with(compact('project'));
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

        if(Comment::where('user_id', '=', $user->id)->count() > 0){

            $comment = Comment::select()->where('user_id', '=', $user->id)->first();
            $comment_id = $comment->id;

            try{

                $customer = User::select()->find($user->id);
                $props = Property::all()->where('project_id', '=', $id);
                $project = Project::all()->where('id', '=', $id);
                $comments = Comment::all()->where('user_id', '=', $user->id);
                $replies = Reply::all()->where('comment_id', '=', $comment_id);
        
    
                if (!$customer && !$props && !$project && !$comments && !$replies) {
                    return redirect()->back();
                } else {
                    return view('customer.details')->with(compact('customer'))->with(compact('props'))->with(compact('project'))->with(compact('comments'))->with(compact('replies'));
                }
 
            } catch (\Exception $e) {
                return redirect()->back();
            }
        }else{
            try{

                $customer = User::select()->find($user->id);
                $props = Property::all()->where('project_id', '=', $id);
                $project = Project::all()->where('id', '=', $id);        
    
                if (!$customer && !$props && !$project) {
                    return 'no';
                } else {
                    return view('customer.details')->with(compact('customer'))->with(compact('props'))->with(compact('project'));
                }
                // return $project;
            } catch (\Exception $e) {
                return 'no no';
            }
        }

    }

}
